<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminAuthController extends Controller
{
    public function __construct(Request $request)
    {
        if (\Gate::allows('admin')) {
            dd(1);
        }
    }

    public function index() {
        return view('admin.auth');
    }

    public function store(Request $request) {
        $pswd = $request->get('password');

        if ($pswd == config('app.admin_password')) {
            $request->session()->put('admin', true);
            return to_route('dash.index');
        } else {
            return redirect()->back()->withErrors(['password' => 'Invalid password!']);
        }
    }
}
