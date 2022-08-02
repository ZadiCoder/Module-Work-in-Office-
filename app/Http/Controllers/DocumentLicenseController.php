<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document_License;

class DocumentLicenseController extends Controller
{
    public function provider_create_license(Request $request){
        dd($request->input());
    }
}
