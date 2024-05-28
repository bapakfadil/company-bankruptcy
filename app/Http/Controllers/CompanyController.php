<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        foreach ($companies as $company) {
            $company->g_score = $company->calculateGScore();
        }
        return view('companies.index', compact('companies'));
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'company_code' => 'required',
            'year_of_data' => 'required|integer',
            'current_assets' => 'required|numeric',
            'current_liabilities' => 'required|numeric',
            'total_assets' => 'required|numeric',
            'ebit' => 'required|numeric',
            'net_income' => 'required|numeric',
        ]);

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Company data added successfully.');
    }

    public function show(Company $company)
    {
        $company->g_score = $company->calculateGScore();
        return view('companies.show', compact('company'));
    }

    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    public function update(Request $request, Company $company)
    {
        $request->validate([
            'company_name' => 'required',
            'company_code' => 'required',
            'year_of_data' => 'required|integer',
            'current_assets' => 'required|numeric',
            'current_liabilities' => 'required|numeric',
            'total_assets' => 'required|numeric',
            'ebit' => 'required|numeric',
            'net_income' => 'required|numeric',
        ]);

        $company->update($request->all());

        return redirect()->route('companies.index')->with('success', 'Company data updated successfully.');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company data deleted successfully.');
    }
}

