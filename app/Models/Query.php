<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Notice;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;

class Query
{
    


      //Consulta para la sección del carousel de inicio
      public function getAllCooperatives()
      {
  
      $query = DB::table('cooperativa')
      ->select(['*'])
      ->orderBy('created_at', 'desc')->get();
      return $query;
              
      }


      

} 