<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lingkungan extends Model
{
    protected $table = 'lingkungan';
    protected $primaryKey = 'id_lingkungan';
    protected $fillable = ['fasilitas'];
}
