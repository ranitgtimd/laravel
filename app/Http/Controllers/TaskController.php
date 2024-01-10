<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Type;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Exception;
use App\Models\Task;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $employee = Employee::get();
        $type = Type::get();
        $data = Task::with('employee','type')->get();
        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('action', function ($row) {
                    $actionBtn = view('admin.task.button', ['item' => $row]);
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view ('admin.task.index',compact('employee','type'));
    }

    public function add(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'employee' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json(['errors' => $validate->errors()], 422);
        } else {
            try {
                Task::create([
                    'name' => $request->name,
                    'descrription' => $request->description,
                    'type_id' => $request->type,
                    'employee_id' => $request->employee,
                    'status' => 'incomplete',
                ]);
                return response()->json([
                    'success' => 'Task Saved Successfully'
                ], 201);
            } catch (Exception $e) {
                return response()->json(['error' => $e->getMessage()]);
            }
        }
    }


}
