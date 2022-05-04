<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musteri extends Model
{
    use HasFactory;

    protected $table = "musteriler";
    public $timestamps = false;
    protected $fillable = [
        "ad",
        "soyad",
        "maas"
    ];
}
