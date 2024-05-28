<?php

namespace App\Http\Controllers\Admin\mantenimiento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promocion;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use DataTables;
use DB;

class PromocionAdminController extends Controller
{

    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('searchText'));
            return view('mantenimiento.promocion.index',["searchText"=>$query]);
        }
        
    }

    
    public function create()
    {
        return view('mantenimiento.promocion.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'txtDescripcion' => 'required|max:120',
        ]);

        // Obtener el último ID y sumar uno
        $lastId = Promocion::max('PRO_ID');
        $newId = $lastId ? $lastId + 1 : 1;

        // Crear una nueva promoción
        $promocion = new Promocion();
        $promocion->PRO_ID = $newId;
        $promocion->PRO_NOMBRE = $request->input('txtDescripcion');
        $promocion->PRO_ESTADO = 1; // Establecer el estado como activo
        $promocion->PRO_FECHA = now(); // Establecer la fecha actual

        $promocion->save();

        return Redirect::to('mantenimiento/promocion')->with('success', 'Promoción creada con éxito');
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $promocion = Promocion::findOrFail($id);
        return view('mantenimiento.promocion.edit', compact('promocion'));
    }


    public function update(Request $request, string $id)
    {
        $request->validate([
            'txtDescripcion' => 'required|max:120',
        ]);

        $promocion = Promocion::findOrFail($id);
        $promocion->PRO_NOMBRE = $request->input('txtDescripcion');
        $promocion->PRO_ESTADO = $request->input('PRO_ESTADO');
        $promocion->update();

        return Redirect::to('mantenimiento/promocion')->with('success', 'Promoción actualizada con éxito');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function listarPromocion(Request $request)
    {
        $input = \Arr::except($request->all(),array('_token', '_method'));
            
        if ($request)
        {
            $searchText = Str::upper($input['searchText']);

            $data=DB::table('PROMOCION as pro')
                ->select('pro.PRO_ID','pro.PRO_NOMBRE','pro.PRO_ESTADO')
                ->where('pro.PRO_NOMBRE', 'like', '%'.$searchText.'%')
                ->get();
                
            return Datatables::of($data)
                ->addColumn('PRO_ESTADO', function($data) {
                    return $data->PRO_ESTADO=='1'?'<span class="badge bg-success">ACTIVO</span>':'<span class="badge bg-danger">INACTIVO</span>';
                })
                ->addColumn('Actions', function($data) {
                    return '
                    <a href="'.url('/').'/mantenimiento/promocion/'.$data->PRO_ID.'/edit">
                        <button class="btn btn-info btn-sm">
                            <i class="fa fa-edit"></i>
                        </button>
                    </a>
                    
                    <a data-target="#modal-delete" data-toggle="modal">
                        <button class="btn btn-danger btn-sm deletePromocion" data-id="'.$data->PRO_ID.'">
                            <i class="fa fa-trash"></i>
                        </button>
                    </a>';
                })
            ->rawColumns(['PRO_ESTADO','Actions'])
            ->make(true);
        }
    }

    public function eliminarPromocion(Request $request)
    {
        $input = \Arr::except($request->all(),array('_token', '_method'));
        $obj   = Promocion::findOrFail($input['id']);
        $obj->PRO_ESTADO = 2;
        $obj->update();        
        return Redirect::to('mantenimiento/promocion');
    }


}


