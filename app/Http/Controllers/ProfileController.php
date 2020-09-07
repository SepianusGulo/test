<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calon;
use App\User;

class ProfileController extends Controller
{
    public function profile()
    {
        $calon = \App\Calon::all();
        return view('profile.profile', ['calon' => $calon]);
    }

    public function edit($id)
    {
        $calon = \App\Calon::find($id);
        return view('profile.edit_profile', ['calon' => $calon]);
    }

    public function update(Request $request, $id)
    {
        $calon = \App\Calon::find($id);
        $calon->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $calon->avatar = $request->file('avatar')->getClientOriginalName();
            $calon->save();
        }
        return redirect('/user/profile')->with('sukses', 'Yeah! data berhasil diupdate');
    }
}
