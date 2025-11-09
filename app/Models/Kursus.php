<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = 'kursus';
    protected $primaryKey = 'id_kursus';
    protected $fillable = ['nama_kursus', 'deskripsi', 'harga', 'durasi', 'status', 'gambar'];
    public $timestamps = true;
}
