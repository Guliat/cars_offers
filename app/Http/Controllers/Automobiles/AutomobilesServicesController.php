<?php

namespace App\Http\Controllers\Automobiles;

use App\Automobiles\AutomobilesServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutomobilesServicesController extends Controller
{
    public function index()
    {
        return view('automobiles.services.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(AutomobilesServices $automobilesServices)
    {
        //
    }

    public function edit(AutomobilesServices $automobilesServices)
    {
        //
    }

    public function update(Request $request, AutomobilesServices $automobilesServices)
    {
        //
    }

    public function destroy(AutomobilesServices $automobilesServices)
    {
        //
    }
}
