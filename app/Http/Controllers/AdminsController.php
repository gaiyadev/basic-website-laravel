<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminsController extends Controller
{
    public function index() {
        return view('dashboard.adminhome');
    }
    public function blank() {
        return view('dashboard.blank');
    }
    public function mail() {
        return view('dashboard.mail');
    }
    public function mail_compose() {
        return view('dashboard.mail_compose');
    }
    public function view() {
        return view('dashboard.view');
    }
    public function post_table() {
        return view('dashboard.post');
    }
    public function login() {
        return view('dashboard.login');
    }
    public function update() {
        return view('dashboard.update');
    }
    
    public function profile() {
        return view('dashboard.profile');
    }
    public function add_user() {
        return view('dashboard.add_user');
    }
    public function log() {
        return view('dashboard.log');
    }

}
