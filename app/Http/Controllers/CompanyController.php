<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::paginate(10);
        return view('general.companies.index')->withCompanies($companies);
    }

    public function search(Request $request)
    {
        $companies = Company::where('number', 'like', '%' . $request->word . '%')
                              ->orWhere('name', 'like', '%' . $request->word . '%')
                              ->orWhere('manager', 'like', '%' . $request->word . '%')
                              ->orWhere('address', 'like', '%' . $request->word . '%')
                              ->orWhere('phone', 'like', '%' . $request->word . '%')
                              ->get();

        return view('general.companies.search')->withCompanies($companies)->withWord($request->word);
    }

    public function create()
    {
        return view('general.companies.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'number' => 'required|numeric:max:25',
            'vat_number' => 'max:30',
            'address' => 'required|max:255',
            'manager' => 'required|max:50',
            'phone' => 'max:25',
            'bank' => 'max:50',
            'iban' => 'max:50',
            'bic' => 'max:25',
            ));

        $company = new Company;
        $company->user_id = Auth::id();
        $company->name = $request->name;
        $company->number = $request->number;
        $company->vat_number = $request->vat_number;
        $company->address = $request->address;
        $company->manager = $request->manager;
        $company->phone = $request->phone;
        $company->bank = $request->bank;
        $company->iban = $request->iban;
        $company->bic = $request->bic;
        $company->note = $request->note;
        if($request->is_provider == "on") {
            $company->is_provider = 1;
        }
        $company->save();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('companies.show', $company->id);
    }

    public function show(Company $company)
    {
        return view('general.companies.show')->withCompany($company);
    }

    public function edit(Company $company)
    {
        return view('general.companies.edit')->withCompany($company);
    }

    public function update(Request $request, Company $company)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'number' => 'required|numeric:max:25',
            'vat_number' => 'max:30',
            'address' => 'required|max:255',
            'manager' => 'required|max:50',
            'phone' => 'max:25',
            'bank' => 'max:50',
            'iban' => 'max:50',
            'bic' => 'max:25',
            ));

        $company->name = $request->name;
        $company->number = $request->number;
        $company->vat_number = $request->vat_number;
        $company->address = $request->address;
        $company->manager = $request->manager;
        $company->phone = $request->phone;
        $company->bank = $request->bank;
        $company->iban = $request->iban;
        $company->bic = $request->bic;
        $company->note = $request->note;
        if($request->is_provider == "on") {
            $company->is_provider = 1;
        } else {
            $company->is_provider = null;
        }
        $company->update();

        Session::flash('success', 'ЗАПИСАНО !');
        return redirect()->route('companies.show', $company->id);
    }

    public function destroy(Company $company)
    {
        //
    }
}
