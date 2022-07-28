<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher_code;
class VoucherCodeController extends Controller
{
    public function index(){
        $fetch = Voucher_code::all();
       return view('index',compact('fetch'));
    } 
    public function create(Request $request){
       // dd($request->input());
       $validate=$request->validate([
        'amount'=> 'required',
        'quantity' => 'required',
        'exDate' => 'required',
    ]);
       $data = new Voucher_code;
       $data->value = $request->amount;
       $data->voucher_id = $request->quantity;
       $data->expiry_date = $request->exDate;
       $data->save();
       return redirect()->route('index');
    }
    public function edit($id){
       
     $data = Voucher_code::find($id);
     return view('edit',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Voucher_code::find($id);
        $data->value = $request->amount;
        $data->voucher_id = $request->quantity;
        $data->expiry_date = $request->exDate;
        $data->save();
        return redirect()->route('index');
        //return redirect(route('index'))->with('status','Student Updated!!');
    }


    public function delete($id){
       Voucher_code::destroy($id);
       return redirect()->route('index');
    }
}
