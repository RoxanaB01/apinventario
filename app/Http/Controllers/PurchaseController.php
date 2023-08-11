<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\pdf;
use App\Purchase;
use App\Provider;
use App\Product;
use App\PurchaseDetails; 
use Illuminate\Http\Request;
use  App\Http\Requests\Purchase\StoreRequest;
use  App\Http\Requests\Purchase\UpdateRequest;
use Carbon\Carbon;
class PurchaseController extends Controller
{
   
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:purchases.index')->only(['index']);
        $this->middleware('can:purchases.create')->only(['create','store']);
      
        $this->middleware('can:change.status.purchases')->only(['change_status']);
        $this->middleware('can:purchases.pdf')->only(['pdf']);
        $this->middleware('can:update.purchases')->only(['update']);
    }

    public function index()
    {
    $purchases = Purchase::get();
    return view('admin.purchase.index',compact('purchases'));
    }

    
    public function create()
    {
        $providers = Provider::get();
        $products = Product::get();
        return view('admin.purchase.create',compact('providers','products'));
    }

    public function store(StoreRequest $request)
{
    $purchase = Purchase::create($request->all() + [
        'user_id' => Auth::user()->id,
        'purchase_date' => Carbon::now('America/Guayaquil'),
    ]);

    foreach ($request->product_id as $key => $value) {
        $results[] = array(
            "product_id" => $request->product_id[$key],
            "quantity" => $request->quantity[$key],
            "price" => $request->price[$key],
        );
    }

    if ($purchase instanceof Purchase) {
        $purchase->purchaseDetails()->createMany($results);
    } else {
        // handle error or return a response indicating failure
    }

    return redirect()->route('purchases.index');
}

  
    public function show(Purchase $purchase)
    {
        return view('admin.purchase.show',compact('purchase'));
    }

   
    public function edit(Purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin.purchase.show',compact('purchase'));
    }

    public function update(UpdateRequest $request, Purchase $purchase)
    {
        // $purchase ->update($request->all());
        // return redirect()->route('purchases.index');
    }

 
    public function destroy(Purchase $purchase)
    {
        // $purchase->delete();
        // return redirect()->route('purchases.index');

    }
    public function change_status(Purchase $purchase)
    {
        if($purchase->status=='VALID'){
            $purchase->update(['status'=>'CANCELED']);
            return redirect()->back();
           }else{
           $purchase->update(['status'=>'VALID']);
            return redirect()->back();
           }
        }
    
    public function pdf(Purchase $purchase){
        $subtotal=0;
        $purchaseDetails=$purchase->purchaseDetails;
        foreach($purchaseDetails as $purchaseDetail){
            $subtotal+=$purchaseDetail->quantity*$purchaseDetail->price;
        }
        $pdf = pdf::loadView('admin.purchase.pdf', compact('purchase','subtotal','purchaseDetails'));
        return $pdf->download('Reporte_compras_'.$purchase->id.'.pdf');


    }

   
}
