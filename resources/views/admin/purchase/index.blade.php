@extends('layouts.admin')
@section('title','Gestion de Compras')
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
             Compras
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Compras</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
            <a class="nav-link btn btn-success" href="{{route('purchases.create')}}">
         <i class="fas fa-plus"></i> Agregar Compras
            </a>
                 
                                <div class="btn-group">
  <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-ellipsis-v"></i>
</a>
  <div class="dropdown-menu dropdown-menu-right">
    <a class="dropdown-item" href="{{route('purchases.create')}}">agregar</a>
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
                            <th>Fecha</th>
                            <th>Total</th>
                            <th>Estado</th>
                            
                            <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($purchases as $purchase)
                        <tr>
                         <th scope="row">{{$purchase->id}}</th>
                         <td>
                             {{$purchase->purchase_date}}
                         </td>
                         <td>{{$purchase->total}}</td>
                         @if($purchase->status=='VALID')
                         <td>
                      <a class="btn btn-success" href="{{route('change.status.purchases',$purchase)}}" type="">
                      Valido
                        </a>
                        </td>
                        @else
                        <td>
                      <a class="btn btn-danger" href="{{route('change.status.purchases',$purchase)}}" type="">
                    Cancelado
                        </a>
                        </td>
                         @endif

                      
                         <td style="width:50px">
                        
<a href="{{route('purchases.pdf',$purchase)}}" class="btn btn-info"> <i class="fas fa-file-pdf"></i></a>

<!-- <a href="" class=""> <i class="fas fa-eye"></i></a> -->
                      
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