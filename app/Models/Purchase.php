<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['no_nota', 'tgl_nota', 'id_distributor', 'total_bayar'];
}