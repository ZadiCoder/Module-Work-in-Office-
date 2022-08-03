<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Company;
class CompanyController extends Controller
{
    public function company_index(){
        $company = Company::get();
        return view('company.index',compact('company'));
        
    }
    public function company_show(){
        $language = Language::all();
        return view('company.add_company',compact('language'));
        
    }
    public function company_create(Request $request){
        $data = array(
            'company_name'=>$request->company_name,
            'email'=>$request->email,
            'password'=>$request->password,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'address'=>$request->address,
            'zip_code'=>$request->zip_code,
            'phone'=>$request->phone,
            'language'=>$request->language,
            'VAT'=>$request->vta_number,

        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/images"), $fileName);
            $data['image'] = $fileName;
        }
         Company::create($data);  
         return redirect()->route('company-index');
    }
}
 