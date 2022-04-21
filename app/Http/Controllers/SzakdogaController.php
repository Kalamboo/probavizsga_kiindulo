<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\szakdoga;

class SzakdogaController extends Controller
{
    public function index()

    {
        return szakdoga::all();
    }



    public function show($id)

    {
        return szakdoga::find($id);
    }



    public function store(Request $request)

    {
        $request->validate([
            'poszt' => 'required'
        ]);

        return szakdoga::create($request->all());
    }



    public function update(Request $request, $id)

    {
        $request->validate([
            'szakdoga_nev' => 'required',
            'githublink' => 'required',
            'oldallink' => 'required',
            'tagokneve' => 'required'
        ]);

        $szakdoga = szakdoga::find($id);
        $szakdoga -> szakdoga_nev = $request -> szakdoga_nev;
        $szakdoga -> githublink = $request -> githublink;
        $szakdoga -> oldallink = $request -> oldallink;
        $szakdoga -> tagokneve = $request -> tagokneve;
        $szakdoga -> save();

        return ['message' => 'Módosítva'];
    }



    public function delete(Request $request, $id)

    {
        $article = szakdoga::find($id);

        $article->delete();

        return ['message' => 'Törölve'];
    }
}
