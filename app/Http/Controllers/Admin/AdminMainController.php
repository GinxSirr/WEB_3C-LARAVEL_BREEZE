<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminMainController extends Controller
{
        public function dashboard()
        {
            return view('AdminPages.dashboard');
        }

        public function users()
        {
            return view('AdminPages.users');
        }

        public function colleges()
        {
            return view('AdminPages.colleges');
        }
}
