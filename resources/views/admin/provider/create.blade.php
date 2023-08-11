@extends('layouts.admin')
@section('title','Registro provedores')
@section('options')
@section('styles')
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper ">
          <div class="page-header">
            <h3 class="page-title">
             Registrar provedores
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('providers.index')}}">provedores</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registro provedores</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
          <h5> Registrar provedores</h5>
                 
</div>
                    {!! Form::open(['route'=>'providers.store','method'=>'POST']) !!}
 
                                @include('admin.provider._form')
                     <button type="submit" class="btn btn-primary mr-2">Registrar</button>
                    <a class="btn btn-light" href="{{route('providers.index')}}">Cancelar</a>
                           {!! Form::close() !!}
             
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection