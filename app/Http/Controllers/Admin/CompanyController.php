<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Company;

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users']
        ]);

        $Company = Company::create($request->all());

        return redirect()->route('admin.companies.edit', $Company)->with('info', 'La compañia se creó con exito');
}

    /**
     * Display the specified resource.
     */
    public function show(Company $Company)
    {
        return view('admin.companies.show', compact('Company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $Company)
    {
        return view('admin.companies.edit', compact('Company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $Company)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);

        $Company->update($request->all());

        return redirect()->route('admin.companies.edit', $Company)->with('info', 'La compañia se actualizó con exito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $Company)
    {
        $Company->delete();

        return redirect()->route('admin.companies.index')->with('info', 'La compañia se eliminó con exito');
    }
}
