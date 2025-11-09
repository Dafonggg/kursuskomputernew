<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class adminController extends Controller
{
    /**
     * Display the admin index page.
     */
    public function indexAdmin(Request $request)
    {
        return view('admin.index-admin');
    }
}