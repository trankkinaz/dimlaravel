<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::all();
        return view('roles.index',[
            'idpage'=>'roleindex',
            'title'=>'List of Role'
         ])->with('roles',$roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create',[
            'idpage'=>'rolecreate',
            'title'=>'Create new Role'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Support\Facades\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate input
        $request->validate([
            'rolename'=>'required|unique:roles',
            'remark'=>'max:150'
        ]);

        Role::create($request->all());
        return redirect()->route('roles.index')->with('success','Create Role Success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('roles.edit',compact('role'))->with([
            'title'=>'Edit Role',
            'idpage'=>'roleedit'
        ]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Role $role)
    {
           $request->validate([
            'rolename'=>'required|max:25',
            'remark'=>'max:150'
        ]);
        $role->update($request->all());
        return redirect()->route('roles.index')
        ->with('success','Role update success');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('roles.index')->with('success','Role Delete Success');
    }
}
