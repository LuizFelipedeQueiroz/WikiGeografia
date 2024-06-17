<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PaisesController extends Controller
{
    public function PaisesEuropeus(){
        $results=DB::select("select países, continente from ONU
        where continente='Europa'
        order by países;");
        return view("paísesView",['países'=>$results]);
    }

    public function PaisesAmericanos(){
        $results=DB::select("select países, continente from ONU
        where continente='América'
        order by países;");
        return view("paísesView2",['países'=>$results]);
    }

    public function PaisesAsiaticos(){
        $results=DB::select("select países, continente from ONU
        where continente='Ásia'
        order by países;");
        return view("paísesView3",['países'=>$results]);
    }

    public function PaisesAfricanos(){
        $results=DB::select("select países, continente from ONU
        where continente='África'
        order by países;");
        return view("paísesView4",['países'=>$results]);
    }
    public function PaisesOceania(){
        $results=DB::select("select países, continente from ONU
        where continente='Oceania'
        order by países;");
        return view("paísesView5",['países'=>$results]);
    }

    public function Todos(){
        $results=DB::select("select * from ONU order by países;");
        return view("paísesView6",['países'=>$results]);
    }
}

?>