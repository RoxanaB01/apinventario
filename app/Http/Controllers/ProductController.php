<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Provider;
use Illuminate\Http\Request;
use  App\Http\Requests\Product\StoreRequest;
use  App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:products.index')->only(['index']);
        $this->middleware('can:products.edit')->only(['edit','update']);
        $this->middleware('can:products.create')->only(['create','store']);
        $this->middleware('can:products.destroy')->only(['destroy']);
        $this->middleware('can:change.status.products')->only(['change_status']);
    }
        
    public function index()
    {
    $products = Product::get();
    
    return view('admin.product.index',compact('products'));
    }

    
    public function create()
    {
        $categories = Category::get();
        $providers= Provider::get();
        return view('admin.product.create',compact('categories','providers'));
    }

   
    public function store(StoreRequest $request)
    {
        if($request->hasFile('images')){
            $file  = $request->file('images');
            $image_name=time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
        }
       $product= Product::create($request->all()+[
          'image'=>$image_name,
        ]);
        $product->update(['code'=>$product->id]);
        return redirect()->route('products.index');
    }

  
    public function show(Product $product)
    {
        return view('admin.product.show',compact('product'));
    }

   
    public function edit(Product $product)
    {

      
        $categories = Category::get();
        $providers= Provider::get();
        return view('admin.product.edit',compact('product','categories','providers'));
    }

    public function update(UpdateRequest $request, Product $product)
    {
        if($request->hasFile('images')){
            $file  = $request->file('images');
            $image_name=time().'_'.$file->getClientOriginalName();
            $file->move(public_path("/image"),$image_name);
        }
    
        $product ->update($request->all()+[
            'image'=>$image_name,
        ]);
        return redirect()->route('products.index');
    }

 
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');

    }
    public function change_status(Product  $product)
    {
        if($product->status=='ACTIVE'){
         $product->update(['status'=>'DEACTIVATED']);
         return redirect()->back();
        }else{
        $product->update(['status'=>'ACTIVE']);
         return redirect()->back();
        }

    }
}
