<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;

class PublicacionesController extends Controller
{
    public function find($id){
        return Publicacion::findOrFail();
    }

    public function getAll(){
        return Publicacion::all();
    }

    public function create(Request $req){
        return Publicacion::create($req->all());
    }
}
