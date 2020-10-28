<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Query;
use Illuminate\Support\Facades\DB;

class CooperativeController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
       return view('user/cooperativa/ingresar');
    }

    public function store(Request $request)
    {
        
        $empresa = request()->input('empresa');
        $origen = request()->input('origen');
        $destino = request()->input('destino');
        $tipo = request()->input('tipo');
        $turno = request()->input('turno');
        $asiento = request()->input('asiento');
        $numero = request()->input('numero'); 
        $precio = request()->input('precio');
        $fecha = request()->input('fecha');
        $hora = request()->input('hora');
        $timestamp = date("Y-m-d H:i:s");

        DB::insert('insert into cooperativa 
        (empresa, origen, destino, tipo, bus, asiento, turno, precio, fecha, hora, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
        [$empresa, $origen, $destino, $tipo, $numero, $asiento, $turno, $precio, $fecha, $hora, $timestamp, $timestamp]);

        return redirect('cooperativa')->with('success', 'Se ha creado un nuevo registro exitosamente.');

    }

    
    public function update()
    {

    }


    public function destroy()
    {

    }

    

}
