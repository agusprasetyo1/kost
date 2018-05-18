<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kamar_mandi extends Model
{
    protected $table = 'kamarmandi';
    protected $primaryKey = 'id_kamarMandi';
    protected $fillable = ['fasilitas'];
}
