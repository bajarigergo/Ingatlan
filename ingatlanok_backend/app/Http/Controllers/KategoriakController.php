<?php

namespace App\Http\Controllers;

use App\Models\kategoriak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\select;

class KategoriakController extends Controller
{
    //
    public function index(){
        return kategoriak::all();
    }
    public function store(Request $request){
        $record = new kategoriak();
        $record -> fill($request->all());
        $record -> save();
    }
    public function show(string $id){
        return kategoriak::find($id);
    }
    public function update(Request $request, string $id){
        $record = kategoriak::find($id);
        $record ->fill($request->all());
        $record -> save();
    }
    public function destroy(string $id){
        kategoriak::find($id)->delete();
    }

}
