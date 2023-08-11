@extends('layouts.admin')
@section('title','Gestion de provedores')
@section('options')
@section('styles')
<style type="text/css">
.unstyled-button{
  border:none;
  padding: 0;
  background:none;
}
</style>
@endsection
@section('preference')
@endsection

@section('content')
<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Proveedores
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page"> Proveedores</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
            <a class="nav-link btn btn-success" href="{{route('providers.create')}}">
         <i class="fas fa-plus"></i> Agregar  Proveedores
            </a>
                 
                                <div class="btn-group">
  <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-ellipsis-v"></i>
</a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="{{route('providers.create')}}">agregar</a>
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

                            <th>Correo electrinico</th>
                           
                            <th>Numero Ruc</th>
                            <th>Direccion</th>
                            <th>Telefono</th>
                            <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($providers as $provider)
                     
                        <tr>
                         <th scope="row">{{$provider->id}}</th>
                         <td>
                             <a href="{{route('providers.index',$provider)}}">{{$provider->name}}</a>
                         </td>
                         <td>{{$provider->email}}</td>

                         <td>{{$provider->ruc_number}}</td>
                         <td>{{$provider->aldress}}</td>
                         <td>{{$provider->phone}}</td>
                      
                         <td style="width:50px">
                        {!! Form::open(['route'=>['providers.destroy',$provider],'method'=>'DELETE']) !!}
                        <a class="btn btn-info" href="{{route('providers.edit',$provider)}}" type="Editar">
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