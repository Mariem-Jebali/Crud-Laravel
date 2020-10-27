<?php

namespace App\Http\Controllers;

use App\Models\{Role,Employee};
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::latest()->paginate(5);
        return view('roles.index', compact('roles')) ;
    }

    public function show(Role $role)
    {
        return view('roles.show',compact('role'));
    }


    public function create()
    {
        return view('roles.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
            ]);
         Role::create($request->all());
         return redirect()->route('roles.index') ->with('success','Role created with success');
    }

 

    
    public function edit(Role $role)
    {
       return view ('roles.edit',compact('role'));
    }

    
    public function update(Request $request, Role $role)
    {
         $request->validate([ 
            'name'=>'required',
        ]);
        $role->update($request->all());
        return redirect()->route('roles.index') ->with('success','Role deleted with success');

    }
  
    public function destroy(Role $role)
    {
     try {
              $role->delete();
              return redirect()->route('roles.index')
            ->with('success','Role deleted with success');
        } catch (\Exception $e) {
            return redirect()->route('roles.index')->with('error','Vous ne pouvait pas supprimer ce niveau car des classes sont reliés à celui-ci. Veuillez d’abord supprimer les classes relié à celui-ci.');
        }
    }
}
