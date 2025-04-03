<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfficeHomeController extends Controller
{
    //

public function index()
{
    return view('office.index');
}
}