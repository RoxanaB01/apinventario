@extends('layouts.admin')
@section('title','Gestion de Empresa')
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
            Empresa
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Empresa</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
           
                 
                                <div class="btn-group">
 
  <div class="dropdown-menu dropdown-menu-right">

    <!-- <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button> -->
  </div>
</div>
                            </div>
                            <br>
{!! Form::model($business,['route'=>['business.update',$business],'method'=>'PUT','files'=>true]) !!}
              <div class="row">
                  <div class ="col-md-6">
                      <strong class="form-label"> <i class="fas fa-pencil-alt"></i> Nombre</strong>
                   
                      <input type="text" name="name" id="name" class="form-control" value="{{$business->name}}">
                  </div>
                  <div class ="col-md-6">
                      <strong class="form-label"> <i class="fas fa-home"></i> Direccion</strong>
                   
                      <input type="text" name="address" id="address" class="form-control" value="{{$business->address}}">
                  </div>

              </div>
              <div>
                  <br>
              </div>
              <div class="row">
                  <div class ="col-md-6">
                      <strong class="form-label"> <i class="fa fa-address-book"></i> Descripcion</strong>
                   
                      <input type="text" name="description" id="description" class="form-control" value="{{$business->description}}">
                  </div>
                  <div class ="col-md-6">
                      <strong class="form-label"> <i class="fa fa-address-card"></i> Ruc</strong>
                   
                      <input type="text" name="ruc" id="ruc" class="form-control" value="{{$business->ruc}}">
                  </div>

</div>
<div>
                  <br>
              </div>
              <div class="row">
                  <div class ="col-md-6">
                      <strong class="form-label"> <i class="far fa-envelope-open"></i> correo electrinco</strong>
                   
                      <input type="text" name="email" id="email" class="form-control" value="{{$business->email}}">
                  </div>
                  <div class ="col-md-6">
                      <strong class="form-label"> <i class="fa-youtube-play"></i> logo</strong>
                   
                      <img src="image/{{$business->logo}}" class="img-fluid" alt="">
                      <input type="file" class="form-control" name="picture" id="picture">
                  </div>

</div>
<div>
    <br>
    <hr>
</div>
<button type="submit" class="btn btn-info mr-2">Actualizar</button>
               
                           {!! Form::close() !!}
            </div>
          </div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
@endsection