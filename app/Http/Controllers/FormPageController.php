<?php

namespace App\Http\Controllers;
use App\Models\FormPage;
use Illuminate\Http\Request;

class FormPageController extends Controller
{
    public function show($slug)
    {
        $formPage = FormPage::where('slug', $slug)->with('fields')->firstOrFail();
    
        return view('forms.show', compact('formPage'));
    }
}
