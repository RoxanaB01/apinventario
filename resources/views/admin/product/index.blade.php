@extends('layouts.admin')
@section('title','Gestion de productos')
@section('options')
@section('styles')
<style type="text/css">
.unstyled-button{
  border:none;
  padding: 0;
  background:none;
  
}
.imagen{
    width: 100px;
  height: 100px;
  }
</style>
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Productos
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Productos</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
            <a class="nav-link btn btn-success" href="{{route('products.create')}}">
         <i class="fas fa-plus"></i> Agregar  Productos
            </a>
                 
                                <div class="btn-group">
  <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-ellipsis-v"></i>
</a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="{{route('products.create')}}">agregar</a>
    <!-- <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button> -->
  </div>
</div>
                            </div>
                            <br>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Image</th>
                            <th>Stock</th>
                           <th>Precio venta</th>
                            <th>Estado</th>
                            <th>Categoria</th>
                           
                            <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($products as $product)
                     
                        <tr>
                         <th scope="row">{{$product->id}}</th>
                         <td>
                             <a href="{{route('products.index',$product)}}">{{$product->name}}</a>
                         </td>
                         <td><img src="image/{{$product->image}}" class="img-fluid"  alt=""  ></td>
                         <td>{{$product->stock}}</td>
                            <td>{{$product->sell_price}}</td>
                         @if($product->status=='ACTIVE')
                         <td>
                      <a class="btn btn-success" href="{{route('change.status.products',$product)}}" type="">
                      Activo
                        </a>
                        </td>
                        @else
                        <td>
                      <a class="btn btn-danger" href="{{route('change.status.products',$product)}}" type="">
                      Desactivado
                        </a>
                        </td>
                         @endif
                         <td>{{$product->category->name}}</td>
                       
                      
                         <td style="width:50px">
                        {!! Form::open(['route'=>['products.destroy',$product],'method'=>'DELETE']) !!}
                        <a class="btn btn-info" href="{{route('products.edit',$product)}}" type="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                        <button class="btn btn-danger" type="submit" title="Elinimir">
                            <i class="fas fa-trash-alt"></i>
</button>
                        {!! Form::close() !!}
                        </td>
                            
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection