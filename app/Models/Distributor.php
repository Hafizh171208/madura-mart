<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distributor extends Model
{
    protected $fillable = [
        'name_distributor',
        'alamat_distributor',
        'notelp_distributor',
    ];
}
