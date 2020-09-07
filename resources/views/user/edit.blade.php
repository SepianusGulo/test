@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('sukses'))
                <div class="alert alert-success mt-5" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif
            </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2>Edit Data Calon Pelamar</h2>
        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="/user/{{$calon->id}}/update" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <div class="form-group{{$errors->has('nama')? 'has-error': ''}}">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Silahkan isi nama depan anda" value="{{$calon->nama}}">
                    @if($errors->has('nama'))
                        <p class="text-danger">{{$errors->first('nama')}}</p>
                    @endif
                </div>
                <div class="form-group{{$errors->has('email')? 'has-error': ''}}">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Silahkan isi email anda" value="{{$calon->email}}">
                    @if($errors->has('email'))
                        <p class="text-danger">{{$errors->first('email')}}</p>
                    @endif
                </div>
                <div class="form-group{{$errors->has('tempat_tanggal_lahir')? 'has-error': ''}}">
                    <label for="nama">Tempat Tanggal Lahir</label>
                    <input type="text" name="tempat_tanggal_lahir" class="form-control" placeholder="Silahkan isi Tanggal Lahir anda" value="{{$calon->tempat_tanggal_lahir}}">
                    @if($errors->has('tempat_tanggal_lahir'))
                        <p class="text-danger">{{$errors->first('tempat_tanggal_lahir')}}</p>
                    @endif
                </div>
                <div class="form-group{{$errors->has('status')? 'has-error': ''}}">
                    <label for="email">status</label>
                    <input type="text" name="status" class="form-control" placeholder="Silahkan isi status anda" value="{{$calon->status}}">
                    @if($errors->has('status'))
                        <p class="text-danger">{{$errors->first('status')}}</p>
                    @endif
                </div>
                <div class="form-group{{$errors->has('jenis_kelamin')? 'has-error': ''}}">
                    <label for="name">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L" @if($calon->jenis_kelamin == 'L') seleceted @endif>Laki-laki</option>
                    <option value="P" @if($calon->jenis_kelamin == 'P') seleceted @endif>Perempuan</option>
                    </select>
                    @if($errors->has('jenis_kelamin'))
                        <p class="text-danger">{{$errors->first('jenis_kelamin')}}</p>
                    @endif
                </div>
                <div class="form-group{{$errors->has('agama')? 'has-error': ''}}">
                    <label for="nama">Agama</label>
                    <input type="text" name="agama" class="form-control" placeholder="Silahkan isi nama agama anda" value="{{$calon->agama}}">
                    @if($errors->has('agama'))
                        <p class="text-danger">{{$errors->first('agama')}}</p>
                    @endif
                </div>
                <div class="form-group{{$errors->has('nohp')? 'has-error': ''}}">
                <label for="nama">No Hp</label>
                <input type="text" name="nohp" class="form-control" placeholder="Silahkan isi nama nohp anda" value="{{$calon->nohp}}">
                @if($errors->has('nohp'))
                    <p class="text-danger">{{$errors->first('nohp')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('golongan_darah')? 'has-error': ''}}">
                <label for="nama">Golongan Darah</label>
                <input type="text" name="golongan_darah" class="form-control" placeholder="Silahkan isi nama golongan_darah anda" value="{{$calon->golongan_darah}}">
                @if($errors->has('golongan_darah'))
                    <p class="text-danger">{{$errors->first('golongan_darah')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('alamat')? 'has-error': ''}}">
                <label for="nama">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Silahkan isi alamat anda" rows="3">{{$calon->alamat}}</textarea>
                @if($errors->has('alamat'))
                    <p class="text-danger">{{$errors->first('alamat')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('no_orang_terdekat')? 'has-error': ''}}">
                <label for="nama">No Orang Terdekat</label>
                <input type="text" name="no_orang_terdekat" class="form-control" placeholder="Silahkan isi nama no_orang_terdekat anda" value="{{$calon->no_orang_terdekat}}">
                @if($errors->has('no_orang_terdekat'))
                    <p class="text-danger">{{$errors->first('no_orang_terdekat')}}</p>
                @endif
            </div>

             <div class="form-group{{$errors->has('avatar')? 'has-error': ''}}">
                <label for="nama">Avatar</label>
                <input type="file" name="avatar" class="form-control">
                @if($errors->has('avatar'))
                    <p class="text-danger">{{$errors->first('avatar')}}</p>
                @endif
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary ">Submit</button>
            </div>
            </form>
                </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>



@endsection


