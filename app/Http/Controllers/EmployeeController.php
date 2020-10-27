<?php

namespace App\Http\Controllers;

use App\Models\{Employee,Role};
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    
    public function index()
    {
       $employees = Employee::latest()->paginate(5);
        return view('employees.index',compact('employees'));

        /*return Employee::with('role')->get()->map(function ($item) {
            return (object)array('id' => $item->id, 'firstname' => $item->firstname, 'lastname' => $item->lastname,
            'birthday' => $item->birthday,'phone' => $item->phone, 'address'=>$item->address,'email' => $item->email,
                 'role' => $item->role_id);
        });
        return view('employees.index');*/
    }

 
    public function create()
    {
         return view('employees.create');
    }

    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->firstname = request('firstname');
        $employee->lastname = request('lastname');
        $employee->email = request('email');
        $employee->address = request('address');
        $employee->birthday = request('birthday');
        $employee->phone = request('phone');
        $employee->role_id = request('role_id');
        $employee->save();
        return redirect()->route('employees.index')->with('success', 'employee created with success');
    }

    public function show(Employee $employee)
    {
        return view('employees.show',compact('employee'));
    }

  
    public function edit(Employee $employee)
    {
        return view('employees.edit',compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {   $employee->update($request->all());
        $employee->role_id = request('role_id');
        $employee->save();
        return redirect()->route('employees.index') ->with('success','employee updated with success');
     /*  $request->validate([ 
            'firstname'=>'required',
            'lastname'=>'required',
            'birthday'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'role_id'=>'required',
        ]);
    $employee->update($request->all());
        return redirect()->route('employees.index') ->with('success','employee updated with success');*/
    }

    public function destroy(Employee $employee)
    {
      // $employee->delete();
     //  return redirect()->route('employees.index') ->with('success','employee delted with success');
     try {
        $employee->delete();
        return redirect()->route('employees.index')
        ->with('success','Role deleted with success');
    } catch (\Exception $e) {
        return redirect()->route('roles.index')
        ->with('error','Vous ne pouvait pas supprimer ce niveau car des classes sont reliés à celui-ci. 
        Veuillez d’abord supprimer les classes relié à celui-ci.');
    }
    }
}
