<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = "tamus";

    protected $fillable = ['id','nama','alamat','status'];
}
