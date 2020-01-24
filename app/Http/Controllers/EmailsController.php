<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Emails;
use App\Application;

class EmailsController extends Controller
{
    //
    public function index()
    {
        
        $code = Auth::user()->work_code;
        $reward = Application::where('work_code','LIKE','%'.$code.'%')->get();
        $id = Auth::user()->id;
        $uploads = Application::where('app_id','LIKE','%'.$id.'%')->get();
        return view('admin_email')
        ->with('reward',$reward)
        ->with('uploads',$uploads);
    }

}
