<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fas_kamar extends Model
{
    protected $table = 'kamar';
    protected $primaryKey = 'id_kamar';
    protected $fillable = ['fasilitas'];
}
