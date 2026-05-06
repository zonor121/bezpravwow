<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminController extends Controller{
    public function index()
{
    // Получаем все заявки и все статусы
    $reports = Report::all();
    $statuses = Status::all();

    // Передаем данные в представление
    return view('admin.index', compact('reports', 'statuses'));
}
}
