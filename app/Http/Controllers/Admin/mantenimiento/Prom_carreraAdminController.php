<?php

namespace App\Http\Controllers\Admin\mantenimiento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promocion;
use App\Models\Carrera;
class Prom_carreraAdminController extends Controller
{    
    public function obtenerDatos()
    {
        $promociones = Promocion::pluck('PRO_NOMBRE', 'PRO_ID');
        $carreras = Carrera::pluck('CAR_NOMBRE', 'CAR_ID');
    
        return response()->json(['promociones' => $promociones, 'carreras' => $carreras]);
    }
    
}
