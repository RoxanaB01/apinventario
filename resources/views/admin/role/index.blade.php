@extends('layouts.admin')
@section('title','Gestion de roles')
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
             roles
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">roles</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
            <a class="nav-link btn btn-success" href="{{route('roles.create')}}">
         <i class="fas fa-plus"></i> Agregar roles
            </a>
                 
                                <div class="btn-group">
  <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-ellipsis-v"></i>
</a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="{{route('roles.create')}}">agregar</a>
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
                            <th>Descripcion</th>
                           
                            
                            <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($roles as $role)
                        <tr>
                         <th scope="row">{{$role->id}}</th>
                         <td>
                             <a href="{{route('roles.show',$role)}}">{{$role->name}}</a>
                         </td>
                         <td>{{$role->description}}</td>

                      
                         <td style="width:50px">
                        {!! Form::open(['route'=>['roles.destroy',$role],'method'=>'DELETE']) !!}
                        <a class="btn btn-info" href="{{route('roles.edit',$role)}}" type="Editar">
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













