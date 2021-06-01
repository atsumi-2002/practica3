<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;

class VentaController extends Controller
{
    public function index()
    {
        $datos['ventas']=Venta::paginate(5);
        return view('ventas.index',$datos);
    }

    public function create()
    {
        return view('ventas.create');
    }
    public function store(Request $request)
    {
        $datosVenta = request()->except('_token');
        Venta::insert($datosVenta);
        return redirect('ventas')->with('mensaje','venta registrada exitosamente');
    }
    public function destroy($id)
    {
        Venta::destroy($id);
        return redirect('ventas')->with('mensaje','venta eliminada exitosamente');
    }
}
