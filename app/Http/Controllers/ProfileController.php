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
            $profile = User::find($id);
            return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],

        ]);
        
        $profile = User::find($id);
        // dd($profile);

        if(request('image')) {
            $imagePath = request('image')->store('profile', 'public');
            $image = "storage/".$profile->image;
            // dd($image);
            $deleted = File::delete($image);
            // dd($deleted);
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(500, 500);
            $image->save();
            $imageArray = ['image' => $imagePath];
        }

        $profile->name = $request->name;
        $profile->image = $imagePath ?? $request->old_image;
        if ($request->password) {
            $profile->password = bcrypt($request->password);
        }
        $profile->save();

        return redirect(route('profile.show'))->with('message', 'Your profile updated succesfully. 😊');
    }

}
