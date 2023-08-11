@extends('layouts.admin')
@section('title','Reporte de  Ventas')
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
            Reportes Ventas
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reportes Ventas</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-between">
    
           
                 
                                <div class="btn-group">
  <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

</a>

</div>
                            </div>
                            <div class="row">
    <div class="col-md-4 col-12 text-center">
        <span>Fecha de consulta</span>
        <div class="form-group">
        <strong>{{\Carbon\Carbon::now()->format('d/m/y')}}</strong>
        </div>
    </div>
    <div class="col-md-4 col-12 text-center">
        <span> Cantidad de Registros</span>
        <div class="form-group">
        <strong>{{$sales->count()}}</strong>
        </div>
    </div>
    <div class="col-md-4 col-12 text-center">
        <span>Total de ingresos</span>
        <div class="form-group">
        <strong>{{$total}}</strong>
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
                      @foreach($sales as $sale)
                        <tr>
                         <th scope="row">{{$sale->id}}</th>
                         <td>
                             {{$sale->sale_date}}
                         </td>
                         <td>{{$sale->total}}</td>
                         <td>{{$sale->status}}</td>

                      
                         <td style="width:50px">
                   
         
<a href="{{route('sales.pdf',$sale)}}" class=""> <i class="fas fa-file-pdf"></i></a>
<a href="" class=""> <i class="fas fa-print"></i></a>
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