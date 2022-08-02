<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provider;
use App\Models\Bank;
class BankController extends Controller
{
    public function provider_bank_edit($id){
        $bank = Bank::where('provider_id',$id)->get()->first();
  // dd($bank->payment_email);
         return view('provider.bank_edit',compact('bank'));
   
    // $bank_data =  Bank::where('provider_id',$id);
    // $bank_data->payment_email = $request->payment_mail;
    // $bank_data->account_name = $request->holder_name;
    // $bank_data->bank_name = $request->bank_name;
    // $bank_data->location = $request->location;
    // $bank_data->account_number = $request->account_number;
    // $bank_data->bit_code = $request->bic_code;
    // $bank_data->bank_description = $request->description;
    // $bank_data->update();
    }
    public function provider_bank_update(Request $request, $id){
       // dd($id);
        //$bank_data =  Bank::where('provider_id',$id);
        $bank_data = Bank::find($id);
        $bank_data->payment_email = $request->payment_mail;
        $bank_data->account_name = $request->holder_name;
        $bank_data->bank_name = $request->bank_name;
        $bank_data->location = $request->location;
        $bank_data->account_number = $request->account_number;
        $bank_data->bit_code = $request->bic_code;
        $bank_data->bank_description = $request->description;
        $bank_data->update();
        return redirect()->route('provider-index');
    }
}
