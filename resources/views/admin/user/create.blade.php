@extends('layouts.admin')

@section('title','Registro Usuarios')
@section('options')
@section('styles')

@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
             Registrar Usuarios
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('users.index')}}">Usuarios</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro Usuarios</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Registrar Usuarios</h5>
                 
</div>
                    {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre:</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Correo electronico</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail3" placeholder="correo" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="exampleInputEmail3" placeholder="contraseña" required>
                    </div>
                                @include('admin.user._form')
                     <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a class="btn btn-light" href="{{route('users.index')}}">Cancelar</a>
                           {!! Form::close() !!}
             
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection