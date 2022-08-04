<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Document_Company;
class DocumentCompanyController extends Controller
{
    public function company_document_show($id){
        $company = Company::find($id);
        return view('company.document.index',compact('company'));
    }
    public function company_document_create(Request $request){
        $data = array(
            'name'=>$request->name,
            'expiry_date'=>$request->exp,
            'company_id'=>$request->company_id,
            );
            if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/images"), $fileName);
            $data['image'] = $fileName;
            }
            $create = Document_Company::create($data);
            return redirect()->route('company-index');
    }

    public function company_document_work($id){
        $doc = Document_Company::where('company_id',$id)->get();
       return view('company.document.show',compact('doc'));
    }
    public function company_document_delete($id){
        Document_Company::destroy($id);
        return redirect()->route('company-index');
    }
}
