<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\business;
use  App\Http\Requests\business\UpdateRequest;
class BusinessController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:business.index')->only(['index']);
        $this->middleware('can:business.edit')->only(['update']);
    }
    public function index(){
        $business= business::where('id',1)->firstOrFail();
        return view('admin.business.index',compact('business'));
    }
  
   
    public function welcome()
    {
        $businesses = business::all();
    
        return view('welcome', ['businesses' => $businesses]);
    }
    public function update(UpdateRequest $request,business $business){
        if($request->hasFile('picture')){
            $file  = $request->file('picture');
            $image_name=time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
        }
        $business->update($request->all()+[
            'logo'=>$image_name,
        ]);
        return redirect()->route('business.index');

    }
}
