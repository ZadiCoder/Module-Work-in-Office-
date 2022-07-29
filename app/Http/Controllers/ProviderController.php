<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function provider_index(){
        return view('provider.index');
    }
    public function provider_show(){
        return view('provider.add_provider');
    }
}
