<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comprasmes=DB::select ('SELECT monthname(c.purchase_date) as mes, sum(c.total) as totalmes 
        FROM purchases c 
        WHERE c.status="VALID" 
        GROUP BY monthname(c.purchase_date), month(c.purchase_date) 
        ORDER BY month(c.purchase_date) desc 
        LIMIT 12
        ');
 

   $ventasmes=DB::select ('SELECT monthname(c.sale_date) as mes, sum(c.total) as totalmes 
        FROM sales c 
        WHERE c.status="VALID" 
        GROUP BY monthname(c.sale_date), month(c.sale_date) 
        ORDER BY month(c.sale_date) desc 
        LIMIT 12
        ');
        $ventasdia =DB::select ('SELECT DATE_FORMAT(v.sale_date,"%d/%m/%Y") as dia , sum(v.total) as 
        totaldia from sales v where v.status="VALID" group by  v.sale_date order  by  day (v.sale_date) desc limit 15');

      

        $totales=DB::select('SELECT (SELECT IFNULL(SUM(c.total), 0) FROM purchases c WHERE DATE(c.purchase_date) AND c.status = "VALID") AS totalcompra, 
        (SELECT IFNULL(SUM(v.total), 0) FROM sales v WHERE DATE(v.sale_date) AND v.status = "VALID") AS totalventa');
        
        $produmenosstock=DB::select('SELECT * FROM products WHERE stock <=10');

        $productosvenditos=DB::select('SELECT p.code as code, sum(dv.quantity) as quantity, p.name as name, p.id as id, p.stock as stock 
        FROM products p 
        INNER JOIN sale_details dv ON p.id=dv.product_id 
        INNER JOIN sales v ON v.id = dv.sale_id 
        WHERE v.status = "VALID" AND YEAR(v.sale_date) = YEAR(CURDATE()) 
        GROUP BY p.code, p.name, p.id, p.stock 
        ORDER BY sum(dv.quantity) DESC 
        LIMIT 15
        ');
    
        return view('home',compact('comprasmes','ventasmes','ventasdia','totales','productosvenditos','produmenosstock'));
    }
}
