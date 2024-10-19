<?php

namespace App\Http\Controllers\Api;


use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserStoreFormRequest;



class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */

    use ApiResponser;
    public function index()
    {
        $users = User::latest()->paginate(5);
        return $this->success(['users' => $users]);
    }


    public function register(UserStoreFormRequest $request)
    {

        $validated = $request->validated();
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);
        $token = $user->createToken($user->name . 'AuthToken')->plainTextToken;
        return $this->success([$user, 'access_token' => $token],('تم اضافة المستخدم بنجاح'));
    }

    public function login(Request $request)

    {
        $input = $request->validate([
            'email' => 'required',
            'password' => 'required|'
        ]);
        $user = User::where('email', $input['email'])->first();
        if (!$user || !Hash::check($input['password'], $user->password)) {

            return response()->json([
                'message' => 'Invalid Credentials'
            ], 401);
        } else {
            $token = $user->createToken($user->name . 'AuthToken')->plainTextToken;
            return $this->success([$user, 'access_token' => $token], 'تم تسجيل الدخول بنجاح');
        }
    }

     public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            "message" => 'تم تسجيل الخروج '
        ]);
    }
}
