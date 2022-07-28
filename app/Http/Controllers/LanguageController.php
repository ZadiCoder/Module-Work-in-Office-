<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
class LanguageController extends Controller
{
    public function index(){
        $fetch = Language::all();
        return view('language.index',compact('fetch'));
    }
    public function create(Request $request){
        //dd($request->input());
        // $validate=$request->validate([
        //     'code'=> 'required|regex:/^[a-zA-ZÑñ\s]+$/',
        //     'value_en' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
        //     'value_ar' => 'required',
        // ]);
          $data = new Language;
          $data->code = $request->label;
          $data->value_en = $request->value_en;
          $data->value_ar = $request->value_ar;
          $data->save();
          return redirect()->route('index');

    }
    public function edit($id){
       // dd($id);
      $data = Language::find($id);
      return view('language.edit',compact('data'));
    }
    public function update(Request $request, $id){
        $data = Language::find($id);
          $data->code = $request->label;
          $data->value_en = $request->value_en;
          $data->value_ar = $request->value_ar;
          $data->save();
          return redirect()->route('index');
    }
    public function search(Request $request){
      //  dd($request->input('search'));
      $search = $request->search;

      $data = Language::where('value_en', $search)
      ->orWhere('value_ar', $search)
      ->get();
       //dd($data);
       return view('language.search',compact('data'));
    }
}
