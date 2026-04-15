<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;

class ReportController extends Controller
{
    public function index(){
        $reports= Report::all();
        return view("reports.index",compact("reports"));
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