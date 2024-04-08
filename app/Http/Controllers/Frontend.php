<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class Frontend extends Controller
{
    public function index(): View
    { 
        $vehicles = Vehicle::all();
        return view('frontend.index', ['vehicles' => $vehicles]);
    }
}
