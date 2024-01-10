<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use Exception;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        $data = Employee::get();
        if ($request->ajax()) {
            return DataTables::of($data)
                // ->addColumn('action', function ($row) {
                //     $actionBtn = view('admin.employee.button', ['item' => $row]);
                //     return $actionBtn;
                // })
                // ->rawColumns(['action'])
                ->make(true);
        }
        return view ('admin.employee.index');
    }

    public function add(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            // 'description' => 'required',
            // 'employee' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 422);
        } else {
            try {
                Employee::create([
                    'name' => $request->name,
                    // 'description' => $request->description,
                    // 'type_id' => $request->type,
                    // 'employee_id' => $request->employee,
                    // 'status' => 'assign',
                ]);
                return response()->json([
                    'success' => 'Student Saved Successfully'
                ], 201);
            } catch (Exception $e) {
                return response()->json(['error' => $e->getMessage()]);
            }
        }
    }
}
