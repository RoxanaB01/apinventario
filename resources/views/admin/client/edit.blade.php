@extends('layouts.admin')
@section('title','Editar Clientes')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
            Editar  Clientes
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('clients.index')}}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar  Clientes</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Editar  clientes</h5>
                 
</div>
                    {!! Form::model($client,['route'=>['clients.update',$client],'method'=>'PUT']) !!}
 
                           
                    
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre:</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1"  value="{{$client->name}}"placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Cedula</label>
                      <input type="number" name="dni" class="form-control" id="exampleInputEmail3"value="{{$client->dni}}" placeholder="cedula" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Ruc</label>
                      <input type="number" name="ruc" class="form-control" id="exampleInputEmail3"value="{{$client->ruc}}" placeholder="ruc" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Direccion</label>
                      <input type="text" name="address" class="form-control" id="exampleInputEmail3"value="{{$client->address}}" placeholder="dirrecion" required>
                    </div>
                   
                    <div class="form-group">
                      <label for="exampleInputEmail3">N.Celular</label>
                      <input type="number" name="phone" class="form-control" id="exampleInputEmail3" value="{{$client->phone}}"placeholder=" numero celular" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Correo Electronico</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail3"value="{{$client->email}}" placeholder="correo electronico" required>
                    </div>
                  
                     <button type="submit" class="btn btn-info mr-2">Actulizar</button>
                    <a class="btn btn-light" href="{{route('clients.index')}}">Cancelar</a>
                           {!! Form::close() !!}
             
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection