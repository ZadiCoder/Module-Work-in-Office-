<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    public function banner_index(){
        $data = Banner::all();
        return view('banner.index',compact('data'));
    }
    public function banner_show(){
        return view('banner.add_banner');
    }
    public function banner_create(Request $request){
      //dd($request->input());
      $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'title' => 'required',
        'text' => 'required'
    ]);
        $data = array(
            'title'=>$request->title,
            'text'=>$request->text,
        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/images"), $fileName);
            $data['image'] = $fileName;
        }
        $create = Banner::create($data);
        return redirect()->route('banner-index');
       // return view('banner.add_banner');
    }


    public function banner_edit($id){
        // dd($id);
       $data = Banner::find($id);
       return view('banner.edit_banner',compact('data'));
    }

    public function banner_update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'text' => 'required'
        ]);

        $data = array(
            'title'=>$request->title,
            'text'=>$request->text,
            'status'=>$request->status,
        );
        if($request->hasFile('image')){
            $image = $request->file('image');
            $fileName = date('dmY').time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path("/images"), $fileName);
            $data['image'] = $fileName;
        }
        $create = Banner::where('id',$id)->update($data);
        return redirect()->route('banner-index');
    }

    
    public function banner_delete($id){
        Banner::destroy($id);
        return redirect()->route('banner-index');
    }


    public function banner_search(Request $request){
        //  dd($request->input('search'));
        $search = $request->search;
  
        $data = Banner::where('title', $search)
        ->orWhere('status', $search)
        ->get();
         //dd($data);
         return view('banner.search',compact('data'));
      }
}
