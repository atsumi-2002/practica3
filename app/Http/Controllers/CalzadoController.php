<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\calzado;

class CalzadoController extends Controller
{
    public function index()
    {
        $datos['calzados']=Calzado::paginate(5);
        return view('calzado.index',$datos);
    }

    public function create()
    {
        return view('calzado.create');
    }
    public function store(Request $request)
    {
        $datosCalzado = request()->except('_token');
        Calzado::insert($datosCalzado);
        return redirect('calzado')->with('mensaje','Calzado registrado exitosamente');
    }
    public function destroy($id)
    {
        Calzado::destroy($id);
        return redirect('calzado')->with('mensaje','Calzado eliminado exitosamente');
    }
    public function edit($id)
    {
        $calzado=Calzado::findOrFail($id);
        return view('calzado.edit',compact('calzado'));
    }
    public function update(Request $request,$id)
    {
        $datosCalzado = request()->except(['_token','_method']);
        Calzado::where('id','=',$id)->update($datosCalzado);
        $calzado=Calzado::findOrFail($id);
        return view('calzado.edit',compact('calzado'));
    }
}

