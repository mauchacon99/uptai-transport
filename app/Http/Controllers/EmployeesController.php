<?php

namespace App\Http\Controllers;

 use App\Http\Requests\Employees\{CreateRequest, UpdateRequest};
use App\Models\Employee;
use Illuminate\Http\Request;
 

class EmployeesController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'employees' => Employee::all()
        ]);
    }
    public function create()
    {  
        return view('employees.create',[
            'employees' => new Employee
        ]);
    }

    public function store(CreateRequest $request)
    {
        $request->EmployeeCreate();
        
        return view('employees.index', [
            'employees' => Employee::all()
        ]);
    }

    public function edit(Employee $empleado)
    {
        return view('employees.edit', [
            'employees' =>  $empleado
        ]);
    }
    public function destroy(Employee $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index',[
            'employees' => Employee::all()
    	]);
    }

    public function update(UpdateRequest $request,  Employee $empleado)
    {
        $request->employeeUpdate($empleado);
        
        return view('employees.index', [
            'employees' => Employee::all()
        ]);
    }
}
