<?php

namespace App\Http\Controllers\Automobiles;


use App\Automobiles\Automobiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutomobilesController extends Controller
{
    public function index()
    {
        $data = new Automobiles;
        $automobiles = $data::paginate(10);

        return view('automobiles.automobiles.index')->withAutomobiles($automobiles);
    }

    public function settings()
    {
        return view('automobiles.settings.index');
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Automobiles $automobiles)
    {
        //
    }

    public function edit(Automobiles $automobiles)
    {
        //
    }

    public function update(Request $request, Automobiles $automobiles)
    {
        //
    }

    public function destroy(Automobiles $automobiles)
    {
        //
    }
}
