<?php

namespace App\Http\Controllers;

use App\Models\SantriVerifiedSetoran;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index() {
        return view('dashboard.admin');
    }
    public function index_setoran() {
        $ongoing = SantriVerifiedSetoran::where('is_verified', 0)->get();
        $accepted =  SantriVerifiedSetoran::where('is_verified', 1)->get();
        return view('dashboard.admin-setoran', compact('ongoing', 'accepted'));
    }
}
