<?php

namespace App\Http\Controllers\admin\roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return view('admin.roles.index');
    }
}
