<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeResource;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return EmployeeResource::collection(Employee::orderBy('name')->get());
    }

    public function store(Request $request): EmployeeResource
    {
        $data = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email|unique:employees,email',
            'joining_date' => 'required|date',
            'is_active'    => 'boolean',
        ]);

        return new EmployeeResource(Employee::create($data));
    }

    public function update(Request $request, Employee $employee): EmployeeResource
    {
        $data = $request->validate([
            'name'         => 'sometimes|string|max:255',
            'email'        => "sometimes|email|unique:employees,email,{$employee->id}",
            'joining_date' => 'sometimes|date',
            'is_active'    => 'sometimes|boolean',
        ]);

        $employee->update($data);

        return new EmployeeResource($employee);
    }

    public function destroy(Employee $employee): Response
    {
        $employee->delete();

        return response()->noContent();
    }
}
