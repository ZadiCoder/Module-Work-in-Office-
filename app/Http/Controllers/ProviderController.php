<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
class ProviderController extends Controller
{
    public function provider_index(){
        return view('provider.index');
    }
    public function provider_show(){
        return view('provider.add_provider');
    }
    public function provider_create(Request $request){
        dd($request->input());
    }
}
