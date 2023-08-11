@extends('layouts.admin')
@section('title','Editar provedores')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
            Editar provedores
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('providers.index')}}">provedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar provedores</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Editar provedores</h5>
                 
</div>
{!! Form::model($provider,['route'=>['providers.update',$provider],'method'=>'PUT']) !!}

                    <div class="form-group">
                      <label for="exampleInputName1">Nombre:</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$provider->name}}" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Corre Electronico</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail3" value="{{$provider->email}}"placeholder="ingrese el correo electrinico" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Numero Ruc</label>
                      <input type="number" name="ruc_number" class="form-control" id="exampleInputEmail3" value="{{$provider->ruc_number}}"placeholder="ingrese el numero RUC" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Direccion</label>
                      <input type="text" name="aldress" class="form-control" id="exampleInputEmail3"value="{{$provider->aldress}}" placeholder="ingrese la dirrecion" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">telefono</label>
                      <input type="number" name="phone" class="form-control" id="exampleInputEmail3" value="{{$provider->phone}}"placeholder="ingrese el telefono" required>
                    </div>

                         
                     <button type="submit" class="btn btn-info mr-2">Registrar</button>
                    <a class="btn btn-light" href="{{route('providers.index')}}">Cancelar</a>
                           {!! Form::close() !!}
             
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection