@extends('layouts.admin')
@section('title','Editar Categorias')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
            Editar  Categorias
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Categorias</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar  Categorias</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Editar  categorias</h5>
                 
</div>
                    {!! Form::model($category,['route'=>['categories.update',$category],'method'=>'PUT']) !!}
 
                           
                    <div class="form-group">
                      <label for="exampleInputName1">Nombre:</label>
                      <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{$category->name}}" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Descripcion</label>
                      <input type="text" name="description" class="form-control" id="exampleInputEmail3" value="{{$category->description}}"placeholder="descripcion" required>
                    </div>
                     <button type="submit" class="btn btn-info mr-2">Actulizar</button>
                    <a class="btn btn-light" href="{{route('categories.index')}}">Cancelar</a>
                           {!! Form::close() !!}
             
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection