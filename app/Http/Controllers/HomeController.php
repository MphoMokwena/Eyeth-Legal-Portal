<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Application;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //Get user work code
        $users = User::all();
        $code = Auth::user()->work_code;
        $reward = Application::where('work_code','LIKE','%'.$code.'%')->get();
        $id = Auth::user()->id;
        $uploads = Application::where('app_id','LIKE','%'.$id.'%')->get();
        return view('admin')
        ->with('reward',$reward)
        ->with('uploads',$uploads)
        ->with('users',$users);        
    }
}
