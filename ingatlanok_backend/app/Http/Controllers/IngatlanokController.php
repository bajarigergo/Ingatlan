<?php

namespace App\Http\Controllers;

use App\Models\ingatlanok;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngatlanokController extends Controller
{
    //
    public function index(){
        return ingatlanok::all();
    }
    public function store(Request $request){
        $record = new ingatlanok();
        $record -> fill($request->all());
        $record -> save();
    }
    public function show(string $id){
        return ingatlanok::find($id);
    }
    public function update(Request $request, string $id){
        $record = ingatlanok::find($id);
        $record ->fill($request->all());
        $record -> save();
    }
    public function destroy(string $id){
        ingatlanok::find($id)->delete();
    }
    public function indexKategoriaval(){
        DB::table('ingatlan as i')
        ->selectRaw('k.nev as kategoria, leiras, hirdetesDatuma, tehermentes, ar from ingatlanok')
        ->join('kategoriak as k','k.id','=','i.kategoria')
        ->get();

    }
    
    public function kategoriaSzerint(string $kat){
        DB::table('kategoriak as k')
        ->join('ingatlanok as i','k.id','=','i.kategoria')
        ->selectRaw('* from ingatlanok')
        ->where('nev','=',$kat)
        ->get();
    }
}
