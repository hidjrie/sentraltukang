<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('ajax-session-expired');
        $this->middleware('auth');
    }
    
    public function index()
    {
        $profile = Auth::guard('web')->user();
        return view('profile.profile', compact('profile'));
    }

    public function edit($id)
    {
        $profile_id = Auth::guard('web')->user()->id;
        if ($profile_id == $id) {
            $profile = User::find($id);
            return view('profile.edit', compact('profile'));
        }
        return redirect(route('profile.index'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],

        ]);
        
        $profile = User::find($id);
        $profile->name = $request->name;
        if ($request->password) {
            $profile->password = bcrypt($request->password);
        }
        $profile->save();

        return redirect(route('profile.index'))->with('message', 'Your profile updated succesfully. 😊');
    }

}
 