<style>

table { vertical-align: top; }
tr    { vertical-align: top; }
td    { vertical-align: top; }
.midnight-blue{
	background:#2c3e50;
	padding: 4px 4px 4px;
	color:white;
	font-weight:bold;
	font-size:12px;
}
.silver{
	background:white;
	padding: 3px 4px 3px;
}
.clouds{
	background:#ecf0f1;
	padding: 3px 4px 3px;
}
.border-top{
	border-top: solid 1px #bdc3c7;
	
}
.border-left{
	border-left: solid 1px #bdc3c7;
}
.border-right{
	border-right: solid 1px #bdc3c7;
}
.border-bottom{
	border-bottom: solid 1px #bdc3c7;
}
table.page_footer {width: 100%; border: none; background-color: white; padding: 2mm;border-collapse:collapse; border: none;}
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte Venta</title>
</head>
<?php 
use App\business;
 $businesses = business::all();

   


?>
<body>
<table cellspacing="0" style="width: 100%;">
        <tr>
        @foreach ($businesses as $business)
            <td style="width: 25%; color: #444444;">
           
            <img style="width: 100%;" src="image/{{ $business->logo }}" alt="Logo"><br>
          
            </td>
			<td style="width: 50%; color: #34495e;font-size:12px;text-align:center">
                <span style="color: #34495e;font-size:14px;font-weight:bold"> DATOS EMMPRESA</span>
				<br>Nombre :{{$business->name}}<br> 
				Email:  {{$business->email}} <br>
                Ruc : {{$business->ruc}} <br>
                Direccion:{{$business->address}}
                
            </td>
            @endforeach
			<td style="width: 25%;text-align:right">
			VENTA Nº {{$sale->id}}  
			</td>
			
        </tr>
    </table>
    <br>
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 11pt;">
        <tr>
           <td style="width:30%; " class='midnight-blue'>Vendedor</td>
           <th style="width: 30% ; text-align: left;" class='midnight-blue'>Cliente </th>
           <th style="width: 40% ; text-align: left;" class='midnight-blue'>Fecha venta</th>
        </tr>
		<tr>
           <td style="width:30%;" >
           {{$sale->client->name}} 
		   </td>
           <td style="width:30%;" >
           {{$sale->user->name}} 
		   </td>
           <td style="width:50%;" >
           {{$sale->created_at}} 
		   </td>
        </tr>
        
   
    </table>
    <br>
  
    <table cellspacing="0" style="width: 100%; text-align: left; font-size: 10pt;">
        <tr>
            <th style="width: 10%;text-align:center" class='midnight-blue'>CANT.</th>
            <th style="width: 40%" class='midnight-blue'>PRODUCTO</th>
            <th style="width: 15%;" class='midnight-blue'>DESCUENTO(%).</th>
            <th style="width: 15%;text-align: right" class='midnight-blue'>PRECIO VENTA.</th>
            <th style="width: 20%;text-align: right" class='midnight-blue'>SUBTOTAL</th>
            
        </tr>


@foreach($saleDetails as $saleDetail)
        <tr>
            <td class='border-top' style="width: 10%; text-align: center"> {{$saleDetail->quantity}} </td>
            <td class='border-top' style="width: 60%; text-align: center">{{$saleDetail->product->name}}</td>
            <td class='border-top' style="width: 15%;">{{$saleDetail->discount}}</td>
            <td class='border-top' style="width: 15%; text-align: right">{{$saleDetail->price}}</td>
            <td class='border-top' style="width: 20%; text-align: right">{{number_format($saleDetail->quantity*$saleDetail->price-$saleDetail->quantity*$saleDetail->price*$saleDetail->discount/100,2)}}</td>
            
        </tr>

	@endforeach
	  
        <tr>
            <td colspan="4" style="widtd: 85%; text-align: right;"><strong>SUBTOTAL &#36;</strong>  </td>
            <td style="widtd: 15%; text-align: right;">{{number_format($subtotal,2)}} </td>
        </tr>
		<tr>
            <td colspan="4" style="widtd: 85%; text-align: right;"><strong>IVA ({{$sale->tax}})% &#36;</strong>  </td>
            <td style="widtd: 15%; text-align: right;"> {{$subtotal*$sale->tax/100,2}}</td>
        </tr><tr>
            <td colspan="4" style="widtd: 85%; text-align: right;"><strong> TOTAL &#36;</strong> </td>
            <td style="widtd: 15%; text-align: right;">{{number_format($sale->total,2)}} </td>
        </tr>
    </table>
	
</body>
</html>

    
    
    

	
    