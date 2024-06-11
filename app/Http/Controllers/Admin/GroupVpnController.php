<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use App\Models\GroupVpn;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupVpnController extends Controller
{
    public function __construct()
    {
        //
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $group_vpns = GroupVpn::all();

        return view('admin.group_vpns.index', compact('group_vpns'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();

        return view('admin.group_vpns.create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:group_vpns',
            'network'=>'required',
            'description'=>'required',
            'company_id'=>'required'
        ]);

        GroupVpn::create([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'network'=>$request->network,
            'description'=>$request->description,
            'company_id'=>$request->company_id
        ]);

        return redirect()->route('admin.group_vpns.index')->with('success', 'Group VPN created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(GroupVpn $group_vpn)
    {
        return view('admin.group_vpns.modal.show', compact('group_vpn'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GroupVpn $group_vpn)
    {
        $companies = Company::all();

        return view('admin.group_vpns.edit', compact('group_vpn', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GroupVpn $group_vpn)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>"required|unique:group_vpns,slug,$group_vpn->id",
            'network'=>'required',
            'description'=>'required',
            'company_id'=>'required'
        ]);

        $group_vpn->update([
            'name'=>$request->name,
            'slug'=>$request->slug,
            'network'=>$request->network,
            'description'=>$request->description,
            'company_id'=>$request->company_id
        ]);

        return redirect()->route('admin.group_vpns.index')->with('success', 'Group VPN updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GroupVpn $group_vpn)
    {
        GroupVpn::where('id', $group_vpn->id)->delete();

        return redirect()->route('admin.group_vpns.index')->with('success', 'Group VPN deleted successfully.');
    }
}
