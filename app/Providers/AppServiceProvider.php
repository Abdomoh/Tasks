<?php

namespace App\Providers;

use App\Models\Task;
use App\Models\Catogry;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
View::composer(['website.Task.catogry','layout.nav'],function($view){

    $categoryies=Catogry::all();
    $huighTasks=Task::latest()->with('catogry')->where('user_id',Auth::user()->id ?? '')->where('catogry_id',1)->get();
    $mediumTasks=Task::latest()->with('catogry')->where('user_id',Auth::user()->id ?? '')->where('catogry_id',2)->get();
    $lowTasks=Task::latest()->with('catogry')->where('user_id',Auth::user()->id ?? '')->where('catogry_id',3)->get();
    $notTasks=Task::latest()->with('catogry')->where('user_id',Auth::user()->id ?? '')->where('catogry_id',3)->get();
    
    $view->with([
    
        'mediumTasks'=>$mediumTasks,
        'huighTasks'=> $huighTasks,
        'lowTasks'=>$lowTasks,
        'notTasks'=>$notTasks,
        'categoryies'=>$categoryies
       ]);
    
});
    }


}
