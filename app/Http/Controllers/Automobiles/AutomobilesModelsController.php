<?php

namespace App\Http\Controllers\Automobiles;

use Auth;
use Session;
use App\Automobiles\AutomobilesModels;
use App\Automobiles\AutomobilesBrands;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutomobilesModelsController extends Controller
{
    public function index()
    { }

    public function create()
    { }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'model' => 'required|max:255|unique:auto_models',
            ));

        $model = new AutomobilesModels;
        $model->user_id = Auth::id();
        $model->brand_id = $request->brand_id;
        $model->model = $request->model;
        $model->save();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect('automobiles_brands/'.$request->brand_id);
    }

    public function show($brand_id, $model_id)
    {
        $model = new AutomobilesModels;
        $models = $model::where('brand_id', $brand_id)->orderBy('model')->get();
        $selectedModel = $model::where('id', $model_id)->first();
        $brand = new AutomobilesBrands;
        $selectedBrand = $brand::where('id', $brand_id)->first();

        return view('automobiles.models.show')->withModels($models)->withSelectedmodel($selectedModel)->withSelectedbrand($selectedBrand);
    }

    public function edit(AutomobilesModels $automobilesModels)
    { }

    public function update(Request $request, AutomobilesModels $automobilesModels)
    { }

    public function destroy(AutomobilesModels $automobilesModels)
    { }
}
