<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Status;

class ReportController extends Controller
{

    public function index(Request $request)
    {
        $sort = $request->input('sort');
        if($sort != 'asc' && $sort != 'desc'){
            $sort = 'desc';
        }

        $status = $request->input('status');
        $validate = $request->validate(
            [
                'status' => 'exists:statuses,id'
            ]
            );
        if($validate){
            $reports = Report::where('status_id', $status)
                    ->orderBy('created_at', $sort)
                    ->paginate(8);
        } else {
            $reports = Report::orderBy('created_at', $sort)
                    ->paginate(8);
        }

        $statuses = Status::all();

        return view("reports.index",compact('reports', 'statuses', 'sort', 'status'));
    }

    public function destroy(Report $report){
        $report -> delete();
        return redirect()->back();
    
    }

    public function store(Report $report, Request $request){
    
    $data = $request -> validate([
        'number' => 'string|required',
        'description' => 'string|required',
    ]);

    $report -> create($data);
    return redirect() -> back();
    }

    public function edit(Report $report){
        return view('reports.edit', compact('report'));
    }

    public function update(Report $report, Request $request){
    
        $data = $request -> validate([
            'number' => 'string|required',
            'description' => 'string|required',
        ]);
    
        $report -> update($data);
        return redirect() -> back();
        }
}