@extends('layouts.admin')
@section('title','Registro Ventas')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
             Registrar Ventas
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('sales.index')}}">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro Ventas</li>
              </ol>
            </nav>
          </div>
          <div class="card">
          {!! Form::open(['route'=>'sales.store','method'=>'POST']) !!}
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Registrar Ventas</h5>
                 
</div>
                   
 
<div class="row">  
                    <div class="col-lg-6 form-group">
                      <label for="exampleInputEmail3">Cliente</label>
                      <select name="client_id" id="client_id" class="form-control">
                       @foreach($clients as $client)
                       <option value="{{$client->id}}">{{$client->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="col-lg-6 form-group">
                      <label for="exampleInputEmail3">producto</label>
                     
                      <select name="product_id" id="product_id" class="form-control">
                      <option value="" disabled selected>selecione un producto</option>
                       @foreach($products as $product)
                       <option value="{{$product->id}}_{{$product->stock}}_{{$product->sell_price}}">{{$product->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    
                    </div>
                    <div class="row">
                    <div class="col-lg-4 form-group">
                      <label for="exampleInputEmail3">impuesto</label>
                      <input type="number" name="tax" id="tax"class="form-control" id="exampleInputEmail3" placeholder="impuesto" required>
                    </div>
                   
                    <div class="col-lg-4 form-group">
                      <label for="exampleInputEmail3">Stock Actual</label>
                      <input type="text" name="" id="stock" value ="" disabled class="form-control" id="exampleInputEmail3" >
                    </div>
                    <div class=" col-lg-4 form-group">
                      <label for="exampleInputEmail3">precio de venta</label>
                      <input type="number" name="price" id="price"class="form-control" disabled id="exampleInputEmail3" placeholder="precio" >
                    </div>
                    </div>
                    <div class="row">
                    <div class="form-group col-lg-6 ">
                      <label for="exampleInputEmail3">cantidad</label>
                      <input type="number" name="quantity" id="quantity"class="form-control" id="exampleInputEmail3" placeholder="cantiadd">
                    </div>

                   
                    <div class="form-group col-lg-6">
                      <label for="exampleInputEmail3">descuento</label>
                      <input type="number" name="discount" id="discount" value="0"class="form-control" id="exampleInputEmail3" placeholder="cantiadd">
                    </div>
</div>
                    <div class="form-group">
                    <button type="button" id="agregar" class="btn btn-info float-right mr-2">agregar producto</button>
                    </div>

<div class="form-group">

<h4 class="card-title"> Detalles de venta </h4>
<div class="table-response col-md-12">
    <table id="detalles" class="table table-striped">
        <thead>
            <tr>
                <th>Eliminar</th>
                <th>producto</th>
                <th>precio venta(PEN)</th>
                <th>descuento(PEN)</th>
                <th>cantidad</th>
                <th>Subtotal(PEN)</th>
            </tr>
        </thead>
  <tfoot>
      <tr>
          <th colspan="5">
        <p align="right">Total:</p>
          </th>
          <th>
          <p align="right"><span id="total">PEN 0.00</span></p>
          </th>
          </tr>

        
          
       <tr id="dvOcultar">
       <th colspan="5">
        <p align="right">impuesto_Total:</p>
          </th>
      <th>
      <p align="right"><span id="total_impuesto"> PEN 0.00</span></p>
      </th>
</tr>

<tr>
       <th colspan="5">
        <p align="right">total apagar:</p>
          </th>
      <th>
      <p align="right"><span align="right" id="total_pagar_html"> PEN 0.00</span> <input type="hidden" name="total" id="total_pagar"></p>
      </th>
</tr>

      
  </tfoot>
    </table>

</div>
</div>
                   
                       
                         
             
            </div>
            <div class="card-footer text-muted">
                     <button type="submit" class="btn btn-primary  mr-2">Registrar</button>
                    <a class="btn btn-light" href="{{route('sales.index')}}">Cancelar</a>
                    </div>
          </div>
          {!! Form::close() !!}
@endsection
@section('scripts')
<script>


$(document).ready(function() {
    $("#agregar").click(function() {
        agregar();
    });
});

function Disable(){
    document.getElementById("activate_taxes").disabled=true;
};
var cont = 1;
 total = 0;
 subtotal = [];
$("#guardar").hide();
$('#product_id').change(mostrarValores);
function mostrarValores(){
    datosProducto = document.getElementById('product_id').value.split('_');
     $("#price").val(datosProducto[2]);
     $("#stock").val(datosProducto[1]);
}
function agregar() {
   datosProducto = document.getElementById('product_id').value.split('_');
   product_id = datosProducto[0];
   producto = $("#product_id option:selected").text();
   quantity = $("#quantity").val();
   price = $("#price").val();
  discount = $('#discount').val();
 stock = $("#stock").val();
   impuesto = $("#tax").val();
  
  if (product_id !== "" && quantity !== "" && quantity > 0 && price !== "") {
    if(parseInt(stock) >= parseInt(quantity)) {
         subtotal[cont] = (quantity* price)-(quantity*price*discount/100);
        total =total + subtotal[cont];
        var fila = '<tr class="selected" id="fila' + cont + '">' +
           '<td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar('+ cont + ');"><i class="fa fa-times fa-2x"></i></button></td>' +
           '<td><input type="hidden" name="product_id[]" value="' + product_id + '">' + producto + '</td>' +
           '<td><input type="hidden" name="price[]" value="' + parseFloat(price).toFixed(2) + '"><input class="form-control" type="number" value="' + parseFloat(price).toFixed(2) + '" disabled></td>' +
           '<td><input type="hidden" name="discount[]" value="' + parseFloat(discount) + '"> <input class="form-control" type="number" value="' + parseFloat(discount) + '" disabled></td>' +
           '<td><input type="hidden" name="quantity[]" value="' + quantity + '"> <input type="number" value="' + quantity + '" class="form-control" disabled></td>' +
           '<td align="right">s/' + parseFloat(subtotal[cont]).toFixed(2) + '</td>' +
           '</tr>';

      cont++;
      limpiar();
    
      totales();
      evaluar();
      $('#detalles').append(fila);
    } else {
      Swal.fire({
        icon: 'error',
        type: 'error',
        text: 'La cantidad de venta supera el stock',
      });
    }
  } else {
    Swal.fire({
      icon: 'error',
      type: 'error',
      text: 'Rellene todos los campos del detalle de la compra',
    });
  }
}




function limpiar() {
    $("#quantity").val("");
    $('#discount').val("0");
    $("#price").val("");
}

function totales() {
    $("#total").html("PEN " + total.toFixed(2));
    var total_impuesto = total * impuesto / 100;
    var total_pagar = total + total_impuesto;
    $("#total_impuesto").html("PEN " + total_impuesto.toFixed(2));
    $("#total_pagar_html").html("PEN " + total_pagar.toFixed(2));
    $("#total_pagar").val(total_pagar.toFixed(2));
}

function evaluar() {
    if (total > 0) {
        $("#guardar").show().text();
    } else {
        $("#guardar").hide();
    }
}
function eliminar(index){
    total= total-subtotal[index];
    total_impuesto =total*impuesto/100;
    total_pagar_html=total+total_impuesto;
    $("#total").html("PEN " + total);
    $("#total_impuesto").html("PEN " + total_impuesto);
    $("#total_pagar_html").html("PEN " + total_pagar_html);
    $("#total_pagar").val(total_pagar_html.toFixed(2));
    $("#fila"+index).remove();
    evaluar();

}

    
</script>
{!! Html::script('melody/js/sweetalert2@11.js') !!}
{!! Html::script('melody/js/avgrund.js') !!}
@endsection