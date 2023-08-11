<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Sale;
use App\Client;
use Barryvdh\DomPDF\Facade\pdf;
use App\Product;
use Illuminate\Http\Request;
use  App\Http\Requests\Sale\StoreRequest;
use  App\Http\Requests\Sale\UpdateRequest;
use Carbon\Carbon;
class SaleController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('can:sales.index')->only(['index']);
        $this->middleware('can:sales.create')->only(['create','store']);
    
        $this->middleware('can:sales.pdf')->only(['pdf']);
        $this->middleware('can:change.status.sales')->only(['change_status']);
    }
        
    public function index()
    {
    $sales = Sale::get();
    return view('admin.sale.index',compact('sales'));
    }

    
    public function create()
    {
        $clients = Client::get();
        $products = Product::get();
        return view('admin.sale.create',compact('clients','products'));
    }

   
    public function store(StoreRequest $request)
{
    $sale = Sale::create($request->all() + [
        'user_id' => Auth::user()->id,
        'sale_date' => Carbon::now('America/Guayaquil'),
    ]);

    foreach ($request->product_id as $key => $value) {
        $results[] = array(
            "product_id" => $request->product_id[$key],
            "quantity" => $request->quantity[$key],
            "price" => $request->price[$key],
            "discount" => $request->discount[$key]
        );
    }

    if ($sale instanceof Sale) {
        $sale->saleDetails()->createMany($results);
    } else {
        // manejar el error o devolver una respuesta indicando el fallo
    }

    return redirect()->route('sales.index');
}


  
    public function show(Sale $sale)
    {
        return view('admin.sale.show',compact('sale'));
    }

   
    public function edit(Sale $sale)
    {
        $clients = Client::get();
        return view('admin.sale.show',compact('sale'));
    }

    public function update(UpdateRequest $request, Sale $sale)
    {
        // $sale ->update($request->all());
        // return redirect()->route('sales.index');
    }

 
    public function destroy(Sale $sale)
    {
        // $sale->delete();
        // return redirect()->route('sales.index');

    }
    public function change_status(Sale $sale)
{
    if($sale->status=='VALID'){
        $sale->update(['status'=>'CANCELED']);
        return redirect()->back();
       }else{
       $sale->update(['status'=>'VALID']);
        return redirect()->back();
       }
}
    public function pdf(Sale $sale){

        $subtotal=0;
        $saleDetails=$sale->saleDetails;
        foreach($saleDetails as $saleDetail){
            $subtotal+=$saleDetail->quantity*$saleDetail->price-$saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100;
        }
        $pdf = pdf::loadView('admin.sale.pdf', compact('sale','subtotal','saleDetails'));
        return $pdf->download('Reporte_Ventas_'.$sale->id.'.pdf');
    }
    
}