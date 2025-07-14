<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::getAllCompanies();
        return view('companies.index', compact('companies'));
    }

    public function showAddCompany()
    {
        // Logic to show form for creating a new company
        return view('companies.add');
    }

    public function store(CompanyRequest $request)
    {
        // Logic to store a new company
        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        if ($request->hasFile('logo')) {
            $company->logo = $request->file('logo')->store('logos', 'public');
        };
        $company->website = $request->website;
        $company->save();

        //Company::create($request->validated());
        return redirect()->route('companies.index')->with('success', 'Company created successfully.');

    }

    public function show($id)
    {
        // Logic to display a specific company
    }

    public function edit($id)
    {
        // Logic to show form for editing a specific company
    }

    public function update(Request $request, $id)
    {
        // Logic to update a specific company
    }

    public function destroy($id)
    {
        // Logic to delete a specific company
    }
}
