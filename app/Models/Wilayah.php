<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    use HasFactory;
    protected $table = 'tabel_detail_wilayah';
    protected $primary_Key = 'id_koperasi';
    protected $foreign_key = 'ID';
}
