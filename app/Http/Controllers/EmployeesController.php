<?php

namespace App\Http\Controllers;

use App\Http\Requests\Employees\{CreateRequest, UpdateRequest};
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{DB, Gate};


class EmployeesController extends Controller
{
    public function index()
    {
        if (! Gate::allows('employees.index')) {
            return abort(401);
        }
        return view('employees.index', [
            'employees' => Employee::all()
        ]);
    }
    public function create()
    {
        if (! Gate::allows('employees.create')) {
            return abort(401);
        }
        return view('employees.create', [
            'employees' => new Employee
        ]);
    }

    public function store(CreateRequest $request)
    {
        if (! Gate::allows('employees.create')) {
            return abort(401);
        }
        $request->EmployeeCreate();

        return view('employees.index', [
            'employees' => Employee::all()
        ]);
    }

    public function edit(Employee $empleado)
    {
        if (! Gate::allows('employees.edit')) {
            return abort(401);
        }
        return view('employees.edit', [
            'employees' =>  $empleado
        ]);
    }
    public function destroy(Employee $empleado)
    {
        if (! Gate::allows('employees.deleteSoft')) {
            return abort(401);
        }
        $empleado->delete();

        return redirect()->route('empleados.index', [
            'employees' => Employee::all()
        ]);
    }
    public function remove(Request $request)
    {
        if (! Gate::allows('employees.softDelete')) {
            return abort(401);
        }
        Employee::where('id', $request->id)->forceDelete();
       
        return redirect()->route('empleados.onlyTrashed', [
            'employees' => Employee::onlyTrashed()->get()
        ]);
    }

    public function update(UpdateRequest $request,  Employee $empleado)
    {
        if (! Gate::allows('employees.edit')) {
            return abort(401);
        }
        $request->employeeUpdate($empleado);

        return view('employees.index', [
            'employees' => Employee::all()
        ]);
    }

    public function onlyTrashed()
    {
        if (! Gate::allows('employees.onlyTrashed')) {
            return abort(401);
        }
        return view('employees.onlyTrashed', [
            'employees' => Employee::onlyTrashed()->get()
        ]);
    }

    public function restore(Request $request)
    {
        
        if (! Gate::allows('employees.restore')) {
            return abort(401);
        }
        $employee = Employee::onlyTrashed()->findOrFail($request->id);
        $employee->restore();

        return redirect()->route('empleados.index', [
            'employees' => Employee::all()
        ]);
    }
}
