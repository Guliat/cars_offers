<?php

namespace App\Http\Controllers\Automobiles;

use Auth;
use Session;
use App\Automobiles\AutomobilesBrands;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutomobilesBrandsController extends Controller
{
    public function index()
    { }

    public function create()
    { }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'brand' => 'required|max:255|unique:auto_brands',
            ));

        $brand = new AutomobilesBrands;
        $brand->user_id = Auth::id();
        $brand->brand = $request->brand;
        $brand->save();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('automobiles_brands.show', $brand->id);
    }

    public function show($id)
    {
        $brand = new AutomobilesBrands;
        $brands = $brand::get();
        $selectedBrand = $brand::where('id', $id)->first();

        return view('automobiles.models.index')->withBrands($brands)->withSelectedbrand($selectedBrand);
    }

    public function edit(AutomobilesBrands $automobilesBrands)
    { }

    public function update(Request $request, AutomobilesBrands $automobilesBrands)
    { }

    public function destroy(AutomobilesBrands $automobilesBrands)
    { }
}
