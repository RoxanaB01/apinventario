@extends('layouts.admin')
@section('title','Registro Compras')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
             Registrar Compras
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('purchases.index')}}">Compras</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro Compras</li>
              </ol>
            </nav>
          </div>
          <div class="card">
          {!! Form::open(['route'=>'purchases.store','method'=>'POST']) !!}
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Registrar compras</h5>
                 
</div>
                   
 
                             
                    <div class="form-group">
                      <label for="exampleInputEmail3">provedor</label>
                      <select name="provider_id" id="provider_id" class="form-control">
                       @foreach($providers as $provider)
                       <option value="{{$provider->id}}">{{$provider->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">impuesto</label>
                      <input type="number" name="tax" id="tax"class="form-control" id="exampleInputEmail3" placeholder="impuesto" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">producto</label>
                      <select name="product_id" id="product_id" class="form-control">
                       @foreach($products as $product)
                       <option value="{{$product->id}}">{{$product->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">cantidad</label>
                      <input type="number" name="quantity" id="quantity"class="form-control" id="exampleInputEmail3" placeholder="cantiadd">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail3">precio de compra</label>
                      <input type="number" name="price" id="price"class="form-control" id="exampleInputEmail3" placeholder="precio" >
                    </div>

                    <div class="form-group">
                    <button type="button" id="agregar" class="btn btn-info float-right mr-2">agregar producto</button>
                    </div>

<div class="form-group">

<h4 class="card-title"> Detalles de compra </h4>
<div class="table-response col-md-12">
    <table id="detalles" class="table table-striped">
        <thead>
            <tr>
                <th>Eliminar</th>
                <th>producto</th>
                <th>precio(PEN)</th>
                <th>cantidad</th>
                <th>Subtotal(PEN)</th>
            </tr>
        </thead>
  <tfoot>
      <tr>
          <th colspan="4">
        <p align="right">Total:</p>
          </th>
          <th>
          <p align="right"><span id="total">PEN 0.00</span></p>
          </th>
          </tr>

        
          
       <tr id="dvOcultar">
       <th colspan="4">
        <p align="right">impuesto_Total:</p>
          </th>
      <th>
      <p align="right"><span id="total_impuesto"> PEN 0.00</span></p>
      </th>
</tr>

<tr>
       <th colspan="4">
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
                    <a class="btn btn-light" href="{{route('purchases.index')}}">Cancelar</a>
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

var cont = 0;
var total = 0;
var subtotal = [];
$("#guardar").hide();

function agregar(){
    product_id =$("#product_id").val();
    producto = $("#product_id option:selected").text();
    quantity= $("#quantity").val();
    price = $("#price").val();
     impuesto =$("#tax").val();
     if (product_id != "" && quantity != "" && quantity > 0 && price != "")
     {
        subtotal[cont] = quantity* price;
        total =total + subtotal[cont];
        var fila = '<tr class="selected" id="fila' + cont +
 '"><td><button type="button" class="btn btn-danger btn-sm" onclick="eliminar(' + cont + ');"><i class="fa fa-times"></i></button></td><td><input type="hidden" name="product_id[]" value="' + product_id + '">' + producto + '</td><td><input type="hidden" id="price[]" name="price[]" value="' + price + '"><input class="form-control" type="number" id="price[]" value="' + price +'" disabled></td><td><input type="hidden" name="quantity[]" value="' + quantity + '"><input class="form-control" type="number" value="' + quantity +'" disabled></td><td align="right">s/' + subtotal[cont] + '</td></tr>';

cont++;
limpiar();
totales ();
 evaluar ();
$('#detalles').append(fila);
}else {
 Swal.fire({
    icon: 'error',
     type: 'error',
     text: 'Rellene todos los campos del detalle de la compras',
});

}

}


function limpiar() {
    $("#quantity").val("");
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