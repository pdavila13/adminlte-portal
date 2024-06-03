<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'slug'=>'unique:companies',
            'cif'=>'required|unique:companies|max:9',
        ]);

        Company::create([
            'name'=>$request->name,
            'slug'=>Str::slug($request->name),
            'cif'=>$request->cif,
            'description'=>$request->description,
            'status'=>'1',
        ]);

        return redirect()->route('admin.companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view('admin.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name'=>'required|max:255',
            'cif'=>'required|unique:companies|max:9',
            'description'=>'required|max:255',
        ]);

        Company::where('id', $company)->update([
            'name'=>$request->name,
            'cif'=>$request->cif,
            'description'=>$request->description,
        ]);

        return redirect()->route('admin.companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('admin.companies.index');
    }
}
