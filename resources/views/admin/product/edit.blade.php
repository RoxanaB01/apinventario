@extends('layouts.admin')
@section('title','Editar productos')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
            Editar productos
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('products.index')}}">productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar productos</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Editar productos</h5>
                 
</div>
{!! Form::model($product,['route'=>['products.update',$product],'method'=>'PUT','files'=>true]) !!}

                    <div class="form-group">
                      <label for="exampleInputName1">Nombre:</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$product->name}}" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Precio venta</label>
                      <input type="number" name="sell_price" class="form-control" id="exampleInputEmail3" value="{{$product->sell_price}}"placeholder="ingrese el precio" required>
                    </div>
                 
                    <div class="form-group">
                      <label for="exampleInputEmail3">Categoria</label>
                      <select name="category_id" id="category_id" class="form-control">
                       @foreach($categories as $category)
                       <option value="{{$category->id}}"
                       @if($category->id==$product->category_id)
                       selected
                       @endif
                       >{{$category->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">provedor</label>
                      <select name="provider_id" id="provider_id" class="form-control">
                       @foreach($providers as $provider)
                       <option value="{{$provider->id}}"
                       @if($provider->id==$product->provider_id)
                       selected
                       @endif
                       >{{$provider->name}}</option>
                       @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                    
                    <div class="card-body">
                  <h4 class="card-title d-flex">Imagen
                    <small class="ml-auto align-self-end">
                      <!-- <a href="dropify.html" class="font-weight-light" target="_blank">More dropify examples</a> -->
                    </small>
                  </h4>
                  <input type="file" name="images" class="dropify" />
                </div>
                    </div>

                         
                     <button type="submit" class="btn btn-info mr-2">Actulizar</button>
                    <a class="btn btn-light" href="{{route('products.index')}}">Cancelar</a>
                           {!! Form::close() !!}
             
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/dropify.js') !!}
@endsection