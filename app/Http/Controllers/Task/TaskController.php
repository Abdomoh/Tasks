<?php

namespace App\Http\Controllers\Task;

use App\Models\Catogry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\TaskStoreFormRequest;
use App\Models\Task;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request  $request)
    {
        $search = $request->input('search');
        $task = Task::where('title', 'like', "%$search%")->paginate(3);

        $catogry = Catogry::all();  //// get all catgory
        return view('website.Task.task', compact('catogry', 'task'));
    }

    public function getCatogry()
    {
        $catogry = Task::with('catogry')->get();

        return view('website.Task.catogry', ['catogry' => $catogry]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catogry = Catogry::all();
        return view('website.Task.task', ['catogry' => $catogry]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreFormRequest $request)
    {
        $validated = $request->validated();
        $task = Task::create([
            'title' => $request->title,
            'catogry_id' => $request->catogry_id,
            'user_id' => Auth::user()->id,
            'description' => $request->description

        ]);
        $task->save();
        toastr()->timeout(3000)->addSuccess('تم اضافة المهمة بنجاح');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        $task->delete();
        toastr()->timeout(3000)->addError('تم حزف المهمة بنجاح');
        return back();
    }
}
