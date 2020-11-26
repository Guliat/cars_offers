<?php

namespace App\Http\Controllers\Automobiles;

use Auth;
use Session;
use App\Automobiles\AutomobilesSubmodels;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AutomobilesSubmodelsController extends Controller
{
    public function index()
    { }

    public function create()
    { }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'submodel' => 'required|max:255|unique:auto_submodels',
            ));

        $submodel = new AutomobilesSubmodels;
        $submodel->user_id = Auth::id();
        $submodel->model_id = $request->model_id;
        $submodel->submodel = $request->submodel;
        $submodel->save();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect('automobiles_models/'.$request->brand_id.'/'.$request->model_id);
    }

    public function show(AutomobilesSubmodels $automobilesSubmodels)
    { }

    public function edit(AutomobilesSubmodels $automobilesSubmodels)
    { }

    public function update(Request $request, AutomobilesSubmodels $automobilesSubmodels)
    { }

    public function destroy(AutomobilesSubmodels $automobilesSubmodels)
    { }
}
