<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = ["mhs_id_user"];
}