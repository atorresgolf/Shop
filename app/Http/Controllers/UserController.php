<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('profile', 'update_profile');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user', $user) );
    }

    public function update_avatar(Request $request)
    {

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $user = Auth::user();

        $avatarName = $user->id . '_avatar' . time() . '.' . request()->avatar->getClientOriginalExtension();

        $request->avatar->storeAs('avatars', $avatarName);

        $user->avatar = $avatarName;
        $user->save();

        return back()
            ->with('success', 'Su foto de perfil ha sido cargada.');
    }
    /*public function update_profile(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $filename = Auth::id() . '_' . time() . '.' . $request->avatar->getClientOriginalExtension();
        $request->avatar->move(public_path('uploads/avatars'), $filename);

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();

        return redirect()->route('user.profile');
    }*/
    //
}
