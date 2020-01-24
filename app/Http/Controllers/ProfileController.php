<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Application;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    //
    public function index()
    {
        $code = Auth::user()->work_code;
        $reward = Application::where('work_code','LIKE','%'.$code.'%')->get();
        $id = Auth::user()->id;
        $uploads = Application::where('app_id','LIKE','%'.$id.'%')->get();
        return view('profile')
        ->with('reward',$reward)
        ->with('uploads',$uploads);
    }

    /**
    * Update the avatar for the user.
    *
    * @param  Request  $request
    * @return Response
    */
    public function update(Request $request)
    {
        //Validation
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'password' => 'required',
            'work_code' => 'required', 
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048'
        ]);
            
        if($request->hasFile('photo'))
        {

            $user = User::find(Auth::user()->id);
            $user->name 	 = $request->input('name');
            $user->email     = $request->input('email');
            $user->address   = $request->input('address');
            $user->work_code = $request->input('work_code');
            $user->contact_no   = $request->input('contact_no');
            $user->password   = Hash::make($request->input('password'));
            //Move to Destination path
            // $user->photo = Storage::url($photo);
            $user->photo = $request->file('photo')->store('images','public');
            // Update user information
            $results = $user->update();
            return redirect()->action('ProfileController@index')
            ->with('message', 'Great, Your Personal information was successfully updated');
        }
        else
        {
            return redirect()->action('ProfileController@index')
            ->with('sorry', 'Sorry, It seems we can not update your Personal information. Please try again!');
        }

    }
}
