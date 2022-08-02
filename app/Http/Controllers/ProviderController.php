<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\Company;
use App\Models\Language;
use App\Models\Currency;
use App\Models\Bank;
class ProviderController extends Controller
{
    public function provider_index(){
        $list = Provider::all();
        return view('provider.index',compact('list'));
    }
    public function provider_show(){
        $company = Company::all();
        $language = Language::all();
        $currency = Currency::all();
        return view('provider.add_provider',compact('company','language','currency'));
    }
    public function provider_create(Request $request){
   
            $data = array(
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=>$request->password,
                'gender'=>$request->r_gender,
                'country'=>$request->country,
                'state'=>$request->state,
                'city'=>$request->city,
                'address'=>$request->address,
                'zip_code'=>$request->zip_code,
                'phone'=>$request->phone,
                'company'=>$request->company,
                'language'=>$request->language,
                'currency'=>$request->currency,

            );
            if($request->hasFile('image')){
                $image = $request->file('image');
                $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path("/images"), $fileName);
                $data['image'] = $fileName;
            }
            $create = Provider::create($data);
           // $id = $create->id;
            $bank_data = new Bank;
            $bank_data->payment_email = $request->payment_mail;
            $bank_data->account_name = $request->holder_name;
            $bank_data->bank_name = $request->bank_name;
            $bank_data->location = $request->location;
            $bank_data->account_number = $request->account_number;
            $bank_data->bit_code = $request->bic_code;
            $bank_data->bank_description = $request->description;
            
            $create->Bank()->save($bank_data);
            return redirect()->route('provider-index');
    }

    public function provider_edit($id){
       // dd($id);
       $company = Company::all();
       $language = Language::all();
       $currency = Currency::all();
       $provider = Provider::find($id);
       $bank     = Bank::find($id);                    
       return view('provider.edit_provider',compact('company','language','currency','provider','bank'));
    }

    public function provider_update(Request $request, $id){
       // dd($request->input());
      // $id = $request->id;
        $data = array(
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>$request->password,
            'gender'=>$request->r_gender,
            'country'=>$request->country,
            'state'=>$request->state,
            'city'=>$request->city,
            'address'=>$request->address,
            'zip_code'=>$request->zip_code,
            'phone'=>$request->phone,
            'company'=>$request->company_name,
            'language'=>$request->language,
            'currency'=>$request->currency,

        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/images"), $fileName);
            $data['image'] = $fileName;
        }
   
            Provider::where('id',$id)->update($data);

   
    return redirect()->route('provider-index');
    }

    public function provider_delete($id){
        Provider::destroy($id);
        return redirect()->route('provider-index');
    }

    public function provider_document_show($id){
            $provider = Provider::find($id);
        return view('provider.document.index',compact('provider'));
    }
    public function provider_search(Request $request){
        //  dd($request->input('search'));
        $search = $request->search;
        $data = Company::where('company_name', $search)
       // ->orWhere('value_ar', $search)
        ->get();
         //dd($data);
         return view('provider.search',compact('data'));
      }
}
