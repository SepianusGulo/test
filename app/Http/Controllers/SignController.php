<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calon;
use App\User;
use Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SignController extends Controller
{
    public function index()
    {
        return view('.auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/dashboard')->with('sukses', 'Yeah! Selamat Datang Kembali');
        }
        return redirect('/signin');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/signin');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama'                 => 'required|min:4',
            'email'                => 'required|email|unique:users',
            'tempat_tanggal_lahir' => 'required|min:5',
            'status'               => 'required|min:4',
            'agama'                => 'required|min:4',
            'jenis_kelamin'        => 'required|min:5',
            'nohp'                 => 'required|min:11,max:12',
            'golongan_darah'       => 'required|min:1',
            'no_orang_terdekat'    => 'required|min:10',
            'alamat'               => 'required|min:4',
            'posisi_yang_dilamar'  => 'required|min:4',
            'pendidikan_terakhir'  => 'required|min:5',
            'nama_institusi'       => 'reqiured|min:5',
            'jurusan'              => 'required|min:7',
            'tahun_lulus'          => 'required|min3',
            'nama_kursus'          => 'required|min:4',
            'sertifikat'           => 'required|min:2',
            'tahun'                => 'required|min:3',
            'nama_perusahaan'      => 'required|min:4',
            'posisi_terakhir'      => 'required|min:4',
            'pendapatan_terakhir'  => 'required|min:4',
            'tahun_selesai'        => 'required|min:3',
            'avatar'               => 'mimes:jpeg,png,jpg',
        ]);

        $user = new \App\User;
        $user->role  = 'calon';
        $user->name  = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('calonku');
        $user->remember_token = Str::random(60);
        $user->save();

        $request->request->add(['user_id' => $user->id]);
        $calon = \App\Calon::create($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $calon->avatar = $request->file('avatar')->getClientOriginalName();
            $calon->save();
        }
        return redirect('/user')->with('sukses', 'Yeah! Data berhasil ditambahkan');
    }
}
