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
            $company->working_capital = $company->current_assets - $company->current_liabilities;
            $company->x1 = $company->working_capital / $company->total_assets;
            $company->x2 = $company->gross_profit / $company->total_assets;
            $company->roa = $company->net_income / $company->total_assets;
            $company->status = $company->g_score > 0 ? 'Tidak Bangkrut' : 'Bangkrut';
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
            'gross_profit' => 'required|numeric',
            'net_income' => 'required|numeric',
        ]);

        Company::create($request->all());

        return redirect()->route('companies.index')->with('success', 'Data perusahaan berhasil ditambahkan.');
    }

    public function show(Company $company)
    {
        $company->g_score = $company->calculateGScore();
        $company->working_capital = $company->current_assets - $company->current_liabilities;
        $company->x1 = $company->working_capital / $company->total_assets;
        $company->x2 = $company->gross_profit / $company->total_assets;
        $company->roa = $company->net_income / $company->total_assets;
        $company->status = $company->g_score > 0 ? 'Tidak Bangkrut' : 'Bangkrut';

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
            'gross_profit' => 'required|numeric',
            'net_income' => 'required|numeric',
        ]);

        $company->update($request->all());

        return redirect()->route('companies.index')->with('success', 'Data perusahaan berhasil diperbarui.');
    }

    public function destroy(Company $company)
    {
        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Data perusahaan berhasil dihapus.');
    }
}
