<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.index.index');
    }
    /*
            public function create()
            {
                //
            }

            public function store(Request $request)
            {
                //
            }

        public function show(Admin $admin)
        {
            //
        }

        public function edit(Admin $admin)
        {
            //
        }

        public function update(Request $request, Admin $admin)
        {
            //
        }

        public function destroy(Admin $admin)
        {
            //
        }
    */
}






























