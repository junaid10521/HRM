<?php

namespace App\Http\Controllers\admin\employees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
{
    return view('admin.employees.index');
}
}
