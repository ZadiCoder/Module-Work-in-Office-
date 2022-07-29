<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company_index(){
        return view('company.index');
    }
    public function company_show(){
        return view('company.add_company');
    }
}
