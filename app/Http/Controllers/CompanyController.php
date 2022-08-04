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
    public function company_edit($id){
        $language = Language::all();
        $company = Company::find($id);
        return view('company.edit_company',compact('language','company'));
    }

    public function company_update(Request $request ,$id){
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
            'status'=>$request->status,

        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/images"), $fileName);
            $data['image'] = $fileName;
        }
        Company::where('id',$id)->update($data); 
         return redirect()->route('company-index');
    }
    public function company_delete($id){
        Company::destroy($id);
        return redirect()->route('company-index');
    }
    public function company_search(Request $request){

        $search = $request->search;
        $data = Company::where('company_name', $search)
        ->orWhere('status', $search)
        ->orWhere('email', $search)
        ->orWhere('phone', $search)
        ->get();
         return view('company.search_company',compact('data'));
      }
}
 