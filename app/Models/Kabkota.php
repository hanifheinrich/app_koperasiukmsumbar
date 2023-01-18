<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kabkota extends Model
{
    use HasFactory;
    protected $table = 'tabel_wilayah';
    protected $primary_Key = 'ID';
}
