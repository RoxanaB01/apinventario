@extends('layouts.admin')
@section('title','Registro productos')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
             Registrar productos
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('products.index')}}">productos</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro productos</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Registrar productos</h5>
                 
</div>
                    {!! Form::open(['route'=>'products.store','method'=>'POST','files'=>true]) !!}
 
                                @include('admin.product._form')
                     <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a class="btn btn-light" href="{{route('products.index')}}">Cancelar</a>
                           {!! Form::close() !!}
             
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection