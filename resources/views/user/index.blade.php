@extends('layouts.app')

@section('content')
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
                <!-- BASIC TABLE -->
                <div class="panel">
                    <div class="panel-heading">
                        <h2>Data Calon Pelamar</h2>
                    </div>
                    <div class="panel-body">
                    <table class="table">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Tambah
                        </button>
                                <thead>
                                        <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Tempat Tanggal Lahir</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Posisi Yang Dilamar</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($no =1)

                                    @endif
                                    @foreach($calon as $pelamar )
                                        <tr>
                                            <th scope="row">{{ $no++ }}</th>
                                            <th scope="row">{{ $pelamar->nama }}</th>
                                            <th scope="row">{{ $pelamar->tempat_tanggal_lahir}}</th>
                                            <th scope="row">{{ $pelamar->email }}</th>
                                            <th scope="row">{{ $pelamar->posisi_yang_dilamar }}</th>
                                            <th>
                                                <a href="user/{{$pelamar->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="/user/{{$pelamar->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
                                            </th>
                                        <tr>
                                    @endforeach
                                </tbody>
                            </table>
                          </div>
                    </div>
                    </div>
                </div>
                <!-- END BASIC TABLE -->
            </div>
		</div>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Calon</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="/user/create" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group{{$errors->has('nama')? 'has-error': ''}}">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Silahkan isi nama depan anda" value="{{old('nama')}}">
                @if($errors->has('nama'))
                    <p class="text-danger">{{$errors->first('nama')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('email')? 'has-error': ''}}">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Silahkan isi email anda" value="{{old('email')}}">
                @if($errors->has('email'))
                    <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('tempat_tanggal_lahir')? 'has-error': ''}}">
                <label for="nama">Tempat Tanggal Lahir</label>
                <input type="text" name="tempat_tanggal_lahir" class="form-control" placeholder="Silahkan isi nama belakang anda" value="{{old('tempat_tanggal_lahir')}}">
                @if($errors->has('tempat_tanggal_lahir'))
                    <p class="text-danger">{{$errors->first('tempat_tanggal_lahir')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('status')? 'has-error': ''}}">
                <label for="email">status</label>
                <input type="text" name="status" class="form-control" placeholder="Silahkan isi status anda" value="{{old('status')}}">
                @if($errors->has('status'))
                    <p class="text-danger">{{$errors->first('status')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('jenis_kelamin')? 'has-error': ''}}">
                <label for="name">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                    <option value="L"{{(old('jenis_kelamin') == 'L') ? 'selected': ''}}>Laki-laki</option>
                    <option value="P"{{(old('jenis_kelamin') == 'P') ? 'selected': ''}}>Perempuan</option>
                </select>
                @if($errors->has('jenis_kelamin'))
                    <p class="text-danger">{{$errors->first('jenis_kelamin')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('agama')? 'has-error': ''}}">
                <label for="nama">Agama</label>
                <input type="text" name="agama" class="form-control" placeholder="Silahkan isi nama agama anda" value="{{old('agama')}}">
                @if($errors->has('agama'))
                    <p class="text-danger">{{$errors->first('agama')}}</p>
                @endif
            </div>
             <div class="form-group{{$errors->has('nohp')? 'has-error': ''}}">
                <label for="nama">No Hp</label>
                <input type="text" name="nohp" class="form-control" placeholder="Silahkan isi nama nohp anda" value="{{old('nohp')}}">
                @if($errors->has('nohp'))
                    <p class="text-danger">{{$errors->first('nohp')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('golongan_darah')? 'has-error': ''}}">
                <label for="nama">Golongan Darah</label>
                <input type="text" name="golongan_darah" class="form-control" placeholder="Silahkan isi nama golongan_darah anda" value="{{old('golongan_darah')}}">
                @if($errors->has('golongan_darah'))
                    <p class="text-danger">{{$errors->first('golongan_darah')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('alamat')? 'has-error': ''}}">
                <label for="nama">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Silahkan isi alamat anda" rows="3">{{old('alamat')}}</textarea>
                @if($errors->has('alamat'))
                    <p class="text-danger">{{$errors->first('alamat')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('no_orang_terdekat')? 'has-error': ''}}">
                <label for="nama">No Orang Terdekat</label>
                <input type="text" name="no_orang_terdekat" class="form-control" placeholder="Silahkan isi nama no_orang_terdekat anda" value="{{old('no_orang_terdekat')}}">
                @if($errors->has('no_orang_terdekat'))
                    <p class="text-danger">{{$errors->first('no_orang_terdekat')}}</p>
                @endif
            </div>
            <div class="form-group{{$errors->has('posisi_yang_dilamar')? 'has-error': ''}}">
                <label for="nama">Posisi yang Dilamar</label>
                <input type="text" name="posisi_yang_dilamar" class="form-control" placeholder="Silahkan isi nama posisi_yang_dilamar anda" value="{{old('posisi_yang_dilamar')}}">
                @if($errors->has('posisi_yang_dilamar'))
                    <p class="text-danger">{{$errors->first('posisi_yang_dilamar')}}</p>
                @endif
            </div>

            <div class="form-group{{$errors->has('pendidikan_terakhir')? 'has-error': ''}}">
                    <label for="nama">Pendidikan Terakhir</label>
                    <input type="text" name="pendidikan_terakhir" class="form-control" placeholder="Silahkan isi nama pendidikan_terakhir anda" value="{{old('pendidikan_terakhir')}}">
                    @if($errors->has('pendidikan_terakhir'))
                        <p class="text-danger">{{$errors->first('pendidikan_terakhir')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('nama_institusi')? 'has-error': ''}}">
                    <label for="nama">Nama Institusi</label>
                    <input type="text" name="nama_institusi" class="form-control" placeholder="Silahkan isi nama nama_institusi anda" value="{{old('nama_institusi')}}">
                    @if($errors->has('nama_institusi'))
                        <p class="text-danger">{{$errors->first('nama_institusi')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('jurusan')? 'has-error': ''}}">
                    <label for="nama">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" placeholder="Silahkan isi nama jurusan anda" value="{{old('jurusan')}}">
                    @if($errors->has('jurusan'))
                        <p class="text-danger">{{$errors->first('jurusan')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('tahun_lulus')? 'has-error': ''}}">
                    <label for="nama">Tahun Lulus</label>
                    <input type="text" name="tahun_lulus" class="form-control" placeholder="Silahkan isi nama tahun_lulus anda" value="{{old('tahun_lulus')}}">
                    @if($errors->has('tahun_lulus'))
                        <p class="text-danger">{{$errors->first('tahun_lulus')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('nama_kursus')? 'has-error': ''}}">
                    <label for="nama">Nama Kursus</label>
                    <input type="text" name="nama_kursus" class="form-control" placeholder="Silahkan isi nama nama_kursus anda" value="{{old('nama_kursus')}}">
                    @if($errors->has('nama_kursus'))
                        <p class="text-danger">{{$errors->first('nama_kursus')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('sertifikat')? 'has-error': ''}}">
                    <label for="nama">Sertifikat</label>
                    <input type="text" name="sertifikat" class="form-control" placeholder="Silahkan isi nama sertifikat anda" value="{{old('sertifikat')}}">
                    @if($errors->has('sertifikat'))
                        <p class="text-danger">{{$errors->first('sertifikat')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('tahun')? 'has-error': ''}}">
                    <label for="nama">Tahun</label>
                    <input type="text" name="tahun" class="form-control" placeholder="Silahkan isi nama tahun anda" value="{{old('tahun')}}">
                    @if($errors->has('tahun'))
                        <p class="text-danger">{{$errors->first('tahun')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('nama_perusahaan')? 'has-error': ''}}">
                    <label for="nama">Nama Perusahaan</label>
                    <input type="text" name="nama_perusahaan" class="form-control" placeholder="Silahkan isi nama nama_perusahaan anda" value="{{old('nama_perusahaan')}}">
                    @if($errors->has('nama_perusahaan'))
                        <p class="text-danger">{{$errors->first('nama_perusahaan')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('posisi_terakhir')? 'has-error': ''}}">
                    <label for="nama">Posisi Terakhir</label>
                    <input type="text" name="posisi_terakhir" class="form-control" placeholder="Silahkan isi nama posisi_terakhir anda" value="{{old('posisi_terakhir')}}">
                    @if($errors->has('posisi_terakhir'))
                        <p class="text-danger">{{$errors->first('posisi_terakhir')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('pendapatan_terakhir')? 'has-error': ''}}">
                    <label for="nama">Pendapatan Terakhir</label>
                    <input type="text" name="pendapatan_terakhir" class="form-control" placeholder="Silahkan isi nama pendapatan_terakhir anda" value="{{old('pendapatan_terakhir')}}">
                    @if($errors->has('pendapatan_terakhir'))
                        <p class="text-danger">{{$errors->first('pendapatan_terakhir')}}</p>
                    @endif
            </div>
            <div class="form-group{{$errors->has('tahun_selesai')? 'has-error': ''}}">
                    <label for="nama">Tahun Selesai</label>
                    <input type="text" name="tahun_selesai" class="form-control" placeholder="Silahkan isi nama tahun_selesai anda" value="{{old('tahun_selesai')}}">
                    @if($errors->has('tahun_selesai'))
                        <p class="text-danger">{{$errors->first('tahun_selesai')}}</p>
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

@endsection


