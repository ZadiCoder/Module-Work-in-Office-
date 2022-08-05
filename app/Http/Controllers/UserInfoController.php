<?php

namespace App\Http\Controllers;

use App\Models\User_info;
use Illuminate\Http\Request;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $user_info= User_info::all();
        return view('user.main', ['User'=>$user_info]);
    }

    public function wallet($id){
        $user_info= User_info::find($id);
        return view ('user.wallet',['user'=> $user_info]);
    }

    public function wallet_edit($id, Request $request){
        $user_info= User_info::find($id);
        $user_info->wallet=$request->Value;

        $user_info->save();

        return redirect()->route('home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.Add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request->input());
        // $validate=$request->validate([
        //     'F_name'=> 'required|min:3|max:20|regex:/^[a-zA-ZÑñ\s]+$/',
        //     'L_Name'=>'required|min:3|max:20|regex:/^[a-zA-ZÑñ\s]+$/',
        //     'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
        //     'Password'=>'required',
        //     'R_Gender'=>'required',
        //     'Country'=>'required',
        //     'P_number'=>'required',
        //     'Language'=>'required',
        //     'Currency'=>'required',
        //     'Status'=>'required',

        // ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = date('dmY') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/images"), $fileName);
            $image = $fileName;
        }

        $info = new User_info;
        $info->F_name = $request->F_Name;
        $info->L_name = $request->L_Name;
        $info->Email = $request->Email;
        $info->Pwd = $request->Password;
        $info->Gender = $request->R_Gender;
        $info->Picture = $image;
        $info->Country = $request->Country;
        $info->Phone = $request->P_number;
        $info->Language = $request->Language;
        $info->Currency = $request->Currency;
        $info->Status = $request->Status;
        $info->Wallet=0;

        $info->save();


        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $result = $request->search;
        $user_info = User_info::where('F_name',$result)
                ->orwhere('L_name',$result)   
                ->orWhere('Email',$result)
                ->orWhere('Status',$result)
                ->orWhere('Phone',$result)
                ->get();


        return view('user.main', ['User'=>$user_info]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_info= User_info::find($id);

        return view('user.Edit', ['info'=>$user_info]);
        
    }

    public function edit_form($id, Request $request){

        // $validate=$request->validate([
        //     'F_name'=> 'required|min:3|max:20|regex:/^[a-zA-ZÑñ\s]+$/'   ,
        //     'L_Name'=>'required|min:3|max:20|regex:/^[a-zA-ZÑñ\s]+$/',
        //     'email'=>'required|regex:/(.+)@(.+)\.(.+)/i',
        //     'Password'=>'required',
        //     'R_Gender'=>'required',
        //     'Country'=>'required',
        //     'P_number'=>'required',
        //     'Language'=>'required',
        //     'Currency'=>'required',
        //     'Status'=>'required',

        // ]);



        $info= User_info::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = date('dmY') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/images"), $fileName);
            $image = $fileName;
            $info->Picture = $image;
        }


        $info->F_name = $request->F_Name;
        $info->L_name = $request->L_Name;
        $info->Email = $request->Email;
        $info->Pwd = $request->Password;
        $info->Gender = $request->R_Gender;
        $info->Country = $request->Country;
        $info->Phone = $request->P_number;
        $info->Language = $request->Language;
        $info->Currency = $request->Currency;
        $info->Status = $request->Status;
   

        $info->save();

        return redirect()->route('home');




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_info $user_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_info  $user_info
     * @return \Illuminate\Http\Response
     */
    public function delete($id){
        User_info::destroy($id);
        return redirect()->route('home');
     }
}
