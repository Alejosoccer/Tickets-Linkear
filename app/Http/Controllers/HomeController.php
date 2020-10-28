<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Query;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    protected $cooperatives;
    use AuthenticatesUsers;

    public function __construct()
    {
        $gestionAdmin = new Query;
        $this->cooperatives = $gestionAdmin->getAllCooperatives();
        $this->middleware('auth');
    }


    public function getAllTicket()
      {
  
        $user = auth()->user();
        $id = $user->id;

        $query = DB::table('ticket')
        ->select(['*'])
        ->where('user_id', $id)
        ->orderBy('created_at', 'desc')->get();
        return $query;
              
      }


    
    public function index()
    {
        
        $cooperatives = $this->cooperatives;
        $ticket = $this->getAllTicket();
        $contador = count($ticket);
   
       
        return view('home', compact('cooperatives', 'ticket', 'contador'));
    }


    public function ticket(Request $request)
    {
        $datosFormulario = request()->except('_token');
        $cooperatives = $this->cooperatives;
        $ticket = $this->getAllTicket();
        $contador = count($ticket);

        $origen = request()->input('select_origen');
        $destino = request()->input('select_destino');
        $fecha = request()->input('fecha-in');

        $query = DB::table('cooperativa as R')
        ->select(['*'])
        ->where('origen', $origen)
        ->where('destino', $destino)
        ->where('fecha', $fecha)
        ->orderBy('R.empresa', 'desc')->get();

        return view('buy/compra', compact('query', 'cooperatives', 'ticket', 'contador'));
    }


    public function indexAsiento($id, $origen, $destino, $fecha)
    {
        $ticket = $this->getAllTicket();
        $contador = count($ticket);
        
        $bus = DB::table('cooperativa as R')
        ->select(['*'])
        ->where('origen', $origen)
        ->where('destino', $destino)
        ->where('fecha', $fecha)
        ->orderBy('R.empresa', 'desc')->get();


        $query = DB::table('cooperativa as R')
        ->select(['*'])
        ->where('id', $id)
        ->orderBy('R.empresa', 'desc')->get();

        $cooperatives = $this->cooperatives;
        return view('buy/select', compact('cooperatives', 'query', 'bus', 'ticket', 'contador'));

    }

    public function reservaTicket(Request $request){

        $estado = 'N';
        $reserva = request()->input('reserva');
        $user_id = request()->input('admin_user');
        $timestamp = date("Y-m-d H:i:s");
        
   
        ;
      
        foreach ($reserva as $index =>$ticket) {

            $array = explode(",", $ticket);
     
            for($i=0; $i<count($array); $i++){

                DB::table('cooperativa')->where('id', $array[$i])->update(['estado' => $estado]);

                $query = DB::table('cooperativa')
                ->select(['empresa', 'origen', 'destino', 'precio', 'asiento', 'bus', 'fecha', 'hora'])
                ->where('id', $array[$i])->get();

                

                foreach($query as $ticket_user){
               
                    DB::insert('insert into ticket (user_id, empresa, origen, destino, bus, asiento, precio, fecha, hora, created_at, updated_at) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )', 
                    [$user_id, $ticket_user->empresa, $ticket_user->origen, $ticket_user->destino,
                    $ticket_user->precio, $ticket_user->asiento, $ticket_user->bus, $ticket_user->fecha,
                    $ticket_user->hora, $timestamp, $timestamp]);
                
                }
                
            }
           
       
        }

        
        return redirect('/')->with('success', 'Se ha realizado tu compra corectamente');
        
    }


    public function eliminarTicket($id, $cooperativa){


        DB::delete('delete from ticket where asiento = ?', [$id]);
        $estado = 'Y';
        DB::table('cooperativa')
        ->where('asiento', $id)
        ->where('empresa', $cooperativa)
        ->update(['estado' => $estado]);
        return redirect()->back()->with('success', 'Se ha elimiando el boleto corectamente');
    }
    

}
