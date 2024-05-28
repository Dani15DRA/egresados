<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocion extends Model
{
    protected $table        = 'PROMOCION';
    protected $primaryKey   = 'PRO_ID';
    public $incrementing    = false;
    public $timestamps      = false;

    protected $casts = [
        'PRO_ID'        => 'int',
        'PRO_ESTADO'    => 'int',
        'PRO_FECHA'  => 'datetime',
    ];

    protected $fillable = [
        'PRO_ID',
        'PRO_NOMBRE',
        'PRO_ESTADO',
        'PRO_FECHA',
    ];

    protected $guarded =[

    ];
}
