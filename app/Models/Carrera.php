<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table        = 'CARRERA';
    protected $primaryKey   = 'CAR_ID';
    public $incrementing    = false;
    public $timestamps      = false;

    protected $casts = [
        'CAR_ID'        => 'int',
        'CAR_ESTADO'    => 'int',
        'CAR_FECHA'  => 'datetime',
    ];

    protected $fillable = [
        'CAR_ID',
        'CAR_NOMBRE',
        'CAR_ESTADO',
        'CAR_FECHA',
    ];

    protected $guarded =[

    ];
}
