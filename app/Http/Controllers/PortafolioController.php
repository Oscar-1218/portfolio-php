<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class PortafolioController extends Controller
{
    public function index()
    {
        /*$datos['empleados']= Empleado::paginate(5); /*consulta toda la info de Empleado y con paginate consulta 
        los (5) primeros y lo almacena en la variable $datos 
        return view('empleado.index',$datos);*/

        $proyectos = Proyecto::paginate();
        return view('welcome', compact('proyectos'));
    }
    
}
