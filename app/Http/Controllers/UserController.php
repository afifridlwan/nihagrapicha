<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

   public function index() 
   {
    return view('pages.admin.profile.index');
   }

    public function edit()
    {
      $user = Auth::user();
      return view('pages.admin.profile.edit', compact('user'));
    }

    public function update(Request $request)
{
    $this->validate($request, [
        'name' => 'string|max:255',
        'no_hp' => 'string|max:125',
        'alamat' => 'string',
        'gambarProfile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        'email' => 'string|max:125',
        'password' => 'nullable|string|min:8|max:125'
    ]);

    $user = Auth::user();
    if ($request->hasFile('gambarProfile')) {
        $request->validate(
            [
                'gambarProfile' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]
            );

            $pathImage = $request->file('gambarProfile')->store('public/upload/image');
            $originalExtension = $request->file('gambarProfile')->getClientOriginalExtension();
            $imageFileName = pathinfo($pathImage, PATHINFO_FILENAME). '_' . time() . '.' . $originalExtension;

            Storage::move($pathImage, 'public/upload/image/' . $imageFileName);
            
            $url = asset("storage/upload/image/{$imageFileName}");
            $user->gambarProfile = $url;
    }
            $user->name = $request->input('name');
            $user->no_hp = $request->input('no_hp');
            $user->alamat = $request->input('alamat');
            $user->email = $request->input('email');

              // Check if the password is provided in the request and update it
                if ($request->filled('password')) {
                    $user->password = Hash::make($request->input('password'));
                }
           

            $user->save();

           return redirect()->route('profile.index');
}
}
