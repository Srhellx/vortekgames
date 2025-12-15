<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard'); 
        // Aquí debes tener una vista en resources/views/admin/dashboard.blade.php
    }
}

