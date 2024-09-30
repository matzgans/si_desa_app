<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resident;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $resident = Resident::count();
        return view('pages.admin.dashboard', compact('resident'));
    }
}
