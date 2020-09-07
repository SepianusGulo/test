@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            @if(session('sukses'))
                <div class="alert alert-success mt-5" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Data Calon Pelamar</h2>
                </div>

            <div class="card-body text-center p-5">
                <div class="row text-center">
                    <div class="col-md-4 pl-5 text-center">
                        @foreach ($calon as $pelamar )

                         @endforeach

                            <p><img src="{{ url('images') }}/{{ $pelamar->avatar }}" alt="" width="70" height="70" class="rounded-circle"></p>

                            <p class="text-left">Posisi yang Dilamar</p>
                            <p class="text-left">Nama</p>
                            <P class="text-left">Email</P>
                            <p class="text-left">No Hp</p>
                            <p class="text-left">Tempat Tanggal Lahir</p>
                            <p class="text-left">Jenis Kelamin</p>
                            <p class="text-left">Status</p>
                            <p class="text-left">Agama</p>
                            <p class="text-left">Golongan Darah</p>
                            <p class="text-left">Nomor Orang yang bisa Dihubungi</p><br>
                            <p class="text-left">PENDIDIKAN TERAKHIR :</p><br>



                    </div>
                    <div class="col-md-8 pl-5">
                        @foreach ($calon as $pelamar )

                         @endforeach
                            <p></p>
                            <p></p>
                            <br><br><br>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->posisi_yang_dilamar }}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->nama }}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->email }}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->nohp }}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->tempat_tanggal_lahir}}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->jenis_kelamin }}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->status }}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->agama }}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->golongan_darah }}</p>
                            <p class="text-left">:&nbsp;&nbsp;&nbsp;{{ $pelamar->no_orang_terdekat }}</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="bg-info">
                                        <tr>
                                        <th scope="col">Jenjang Pendidikan Terakhir</th>
                                        <th scope="col">Nama Industri Akademik</th>
                                        <th scope="col">Jurusan</th>
                                        <th scope="col">Tahun Lusus</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <tr>
                                            <td>{{$pelamar->pendidikan_terakhir}}</td>
                                            <td>{{ $pelamar->nama_institusi }}</td>
                                            <td>{{ $pelamar->jurusan }}</td>
                                            <td>{{ $pelamar->tahun_lulus }}</td>
                                        </tr>

                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <p class="text-left">RIWAYAT PELATIHAN :</p><br>
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="bg-info">
                                        <tr>
                                        <th scope="col">Nama Kursus/Seminar</th>
                                        <th scope="col">Sertifikat(Ya/Tidak)</th>
                                        <th scope="col">Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <tr>
                                            <td>{{ $pelamar->nama_kursus}}</td>
                                            <td>{{ $pelamar->sertifikat }}</td>
                                            <td>{{ $pelamar->tahun }}</td>

                                        </tr>

                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mt-5">
                        <p class="text-left">RIWAYAT PEKERJAAN :</p><br>
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead class="bg-info">
                                        <tr>
                                        <th scope="col">Nama Perusahaan</th>
                                        <th scope="col">Posisi Terakhir</th>
                                        <th scope="col">Pendapatan Terakhir</th>
                                        <th scope="col">Tahun</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <tr>
                                            <td>{{ $pelamar->nama_perusahaan}}</td>
                                            <td>{{ $pelamar->posisi_terakhir }}</td>
                                            <td>{{ $pelamar->pendapatan_terakhir }}</td>
                                            <td>{{ $pelamar->tahun_selesai }}</td>

                                        </tr>

                                        </tbody>
                                    </table>
                            </div>
                        </div>
                        <button type="button" class="btn btn-warning mt-5"><a href="/user/profile/{{ $pelamar->id }}/edit">Edit Profile</a></button>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


@endsection


