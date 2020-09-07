<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon extends Model
{
    protected $table = 'calon';
    protected $fillable = [
        'user_id', 'nama', 'email', 'posisi_yang_dilamar', 'avatar', 'no_orang_terdekat', 'tempat_tanggal_lahir', 'jenis_kelamin', 'status', 'agama', 'golongan_darah', 'alamat', 'nohp', 'posisi_yang_dilamar', 'pendidikan_terakhir', 'nama_institusi', 'jurusan', 'tahun_lulus', 'nama_kursus', 'sertifikat',
        'tahun', 'nama_perusahaan', 'posisi_terakhir', 'pendapatan_terakhir', 'tahun_selesai'
    ];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/default.jpg');
        } else {
            return asset('images/' . $this->avatar);
        }
    }

    public  function pekerjaan()
    {
        return $this->belongsToMany(Pekerjaan::class);
    }

    public  function pelatihan()
    {
        return $this->belongsToMany(Pelatihan::class);
    }

    public  function Pendidikan()
    {
        return $this->belongsToMany(Pendidikan::class);
    }
}
