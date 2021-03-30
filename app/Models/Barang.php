<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Barang as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; //model Eloquent

class Barang extends Model
{
    protected $table="barangs"; // Eloquent akan membuat model mahasiswa menyimpan record di table mahasiswas
    public $timestamps=false;
    protected $primaryKey = 'id'; // Memanggil isi DB dengan Primarykey
    
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'kategori_barang',
        'harga',
        'qty',
    ];
};
