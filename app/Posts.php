<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $table = 'tb_minyak';
    protected $table2 = 'tb_jenis';
    public $primaryKey = "id";
    public $timestamps = false;
}
