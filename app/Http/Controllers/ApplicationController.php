<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Application;
use Auth;
use App\User;
use Redirect;
use Storage;

class ApplicationController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $code = Auth::user()->work_code;
        $reward = Application::where('work_code','LIKE','%'.$code.'%')->get();
        $id = Auth::user()->work_code;
        $uploads = Application::where('work_code','LIKE','%'.$id.'%')->get();
        return view('admin_application')
        ->with('reward',$reward)
        ->with('uploads',$uploads);
    }

    public function addapplication(Request $request)
    {
        
            //Validate to check if uploaded file is an image or not
             $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'cover' => 'required',
                'work_code' => 'required', 
                'form' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048'
             ]);

            $application = new Application;
            
            if($request->hasFile('form'))
            {

                $application->name 		= $request->input('name');
                $application->email     = $request->input('email');
                $application->app_id    = $request->input('app_id');
                $application->work_code = $request->input('work_code');
                $application->cover     = $request->input('cover');
                $application->reward    = $request->input('reward');
                //Move to Destination path
                $application->form = $request->file('form')->store('application-forms','public');

                $results = $application->save();
                return redirect()->action('ApplicationController@index')
                ->with('message', 'Excellent!, Your application form has been submitted!');
            }
            else
            {
                return redirect()->action('ApplicationController@index')
                ->with('sorry', 'Sorry it seems like you were unable to submit your form, please try resending it again!');
            }
    }
}
