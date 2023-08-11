@extends('layouts.admin')
@section('title','Editar Roles')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
            Editar  Roles
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar  Roles</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Editar  roles</h5>
                 
</div>
                    {!! Form::model($role,['route'=>['roles.update',$role],'method'=>'PUT']) !!}
 
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre:</label>
                      <input type="text" name="name" class="form-control" value="{{$role->name}}" id="exampleInputName1" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Slug</label>
                      <input type="text" name="slug" class="form-control" value="{{$role->slug}}" id="exampleInputEmail3" placeholder="slug" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">descripcion</label>
                      <input type="text" name="description" class="form-control" value="{{$role->description}}" id="exampleInputEmail3" placeholder="descripcion" required>
                    </div>
                    @include('admin.role._form')
                     <button type="submit" class="btn btn-info mr-2">Actulizar</button>
                    <a class="btn btn-light" href="{{route('roles.index')}}">Cancelar</a>
                           {!! Form::close() !!}
             
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection