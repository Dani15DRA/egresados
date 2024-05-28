<?php

namespace App\Http\Controllers\Admin\mantenimiento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrera;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DataTables;
use DB;
class CarreraAdminController extends Controller
{
    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('searchText'));
            return view('mantenimiento.carrera.index',["searchText"=>$query]);
        }
        
    }

    public function create()
    {
        return view('mantenimiento.carrera.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'txtDescripcion' => 'required|max:120',
        ]);

        // Obtener el último ID y sumar uno
        $lastId = Carrera::max('CAR_ID');
        $newId = $lastId ? $lastId + 1 : 1;

        // Crear una nueva carrera
        $carrera = new Carrera();
        $carrera->CAR_ID = $newId;
        $carrera->CAR_NOMBRE = $request->input('txtDescripcion');
        $carrera->CAR_ESTADO = 1; // Establecer el estado como activo
        $carrera->CAR_FECHA = now(); // Establecer la fecha actual

        $carrera->save();

        return Redirect::to('mantenimiento/carrera')->with('success', 'Carrera creada con éxito');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $carrera = Carrera::findOrFail($id);
        return view('mantenimiento.carrera.edit', compact('carrera'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'txtDescripcion' => 'required|max:120',
        ]);

        $carrera = Carrera::findOrFail($id);
        $carrera->CAR_NOMBRE = $request->input('txtDescripcion');
        $carrera->CAR_ESTADO = $request->input('CAR_ESTADO');
        $carrera->update();

        return Redirect::to('mantenimiento/carrera')->with('success', 'Promoción actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function listarCarrera(Request $request)
    {
        $input = \Arr::except($request->all(),array('_token', '_method'));
            
        if ($request)
        {
            $searchText = Str::upper($input['searchText']);

            $data=DB::table('CARRERA as car')
                ->select('car.CAR_ID','car.CAR_NOMBRE','car.CAR_ESTADO')
                ->where('car.CAR_NOMBRE', 'like', '%'.$searchText.'%')
                ->get();
                
            return Datatables::of($data)
                ->addColumn('CAR_ESTADO', function($data) {
                    return $data->CAR_ESTADO=='1'?'<span class="badge bg-success">ACTIVO</span>':'<span class="badge bg-danger">INACTIVO</span>';
                })
                ->addColumn('Actions', function($data) {
                    return '
                    <a href="'.url('/').'/mantenimiento/carrera/'.$data->CAR_ID.'/edit">
                        <button class="btn btn-info btn-sm">
                            <i class="fa fa-edit"></i>
                        </button>
                    </a>
                    
                    <a data-target="#modal-delete" data-toggle="modal">
                        <button class="btn btn-danger btn-sm deleteCarrera" data-id="'.$data->CAR_ID.'">
                            <i class="fa fa-trash"></i>
                        </button>
                    </a>';
                })
            ->rawColumns(['CAR_ESTADO','Actions'])
            ->make(true);
        }

        

    }

    public function eliminarCarrera(Request $request)
    {
        $input = \Arr::except($request->all(),array('_token', '_method'));
        $obj   = Carrera::findOrFail($input['id']);
        $obj->CAR_ESTADO = 2;
        $obj->update();        
        return Redirect::to('mantenimiento/carrera');
    }




}
