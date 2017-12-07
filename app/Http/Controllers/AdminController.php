<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function delete()
    {
        Storage::delete("1512544549_coinbase_bitcoin_hard_fork-18-11-2017-20-56-15.png");
    }
}
