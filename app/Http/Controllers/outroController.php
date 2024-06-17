<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class outroController extends Controller{
    public function economia(){
        $results=DB::select("select países, economia from fundo_monetário_mundial
          order by economia desc;");
        return view("economiaView",[
            'ONUS'=>$results,
            'países'=>$results,
            'economia'=>$results
    ]);
    }
}


?>