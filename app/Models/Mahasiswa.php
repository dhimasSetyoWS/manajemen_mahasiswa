<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nama' , 'nim' , 'email']; // Memberi tahu laravel bahwa column yang bisa di interaksi menggunakan eloquent adalah ini semua
    protected $table = "mahasiswa"; // Spesifikkan nama table karena jika tidak, maka laravel secara default akan mencari table dengan plural noun yakni Mahasiswa(s)
}
