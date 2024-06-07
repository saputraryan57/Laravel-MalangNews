<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    use HasFactory;
    protected $table = 'penulis';
    protected $primaryKey = 'id_penulis';
    public $incrementing = true;
    protected $fillable = ['nama_penulis', 'email', 'no_tlp','bio_penulis'];
    public $timestamps = false;

}
