<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentController extends Controller
{
    public function provider_create_work(Request $request){

       $data = array(
        'name'=>$request->name,
        'expiry_date'=>$request->exp,
        'provider_id'=>$request->provider_id,
        );
        if($request->hasFile('image')){
        $image = $request->file('image');
        $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path("/images"), $fileName);
        $data['image'] = $fileName;
        }
        $create = Document::create($data);
        return redirect()->route('provider-index');
    }

    public function provider_show_work(Request $request, $id){
       $doc = Document::where('provider_id',$id)->get();
       return view('provider.document.show',compact('doc'));

    }
}
