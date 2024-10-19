<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\TaskStoreFormRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    use ApiResponser;
    public function index()
    {
        $tasks = Task::with('catogry')->paginate(5);
        return $this->success(['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreFormRequest $request)
    {
        $input = $request->validated();
        $task = Task::create([
            'title' => $request->title,
            'catogry_id' => $request->catogry_id,
            'user_id' => Auth::user()->id,
            'description' => $request->description

        ]);
        $task->save();
        return $this->success(['task' => $task], 'تم  اضافة المهمة  بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     
        $task = Task::find($id);
       
        if (!$task) {
            return $this->error('not found', 404);
        }
        return $this->success(['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
  
        $task = Task::find($id);
       
        if (!$task) {
            return $this->error('not found', 404);
        }
        return $this->success(['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);
        if (!$task) {
            return $this->error('not found', 404);
        }
        $task->update($request->all());
        return $this->success(['task' => $task], 'تم  تعديل المهمة  بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);
        if (!$task) {
            return $this->error('not found', 404);
        }
        $task->delete();
        return $this->success(['task' => $task], 'تم  حزف المهمة  بنجاح');
    }
}
