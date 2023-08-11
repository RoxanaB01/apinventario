@extends('layouts.admin')
@section('title','Reporte de fecha por rango')
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
            Reporte de fecha por rango
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reporte de fecha por rangos</li>
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
                            
                    {!! Form::open(['route'=>'report.results','method'=>'POST']) !!}
                            <div class="row">
    <div class="col-md-3 col-12 text-center">
        <span>Fecha inicio</span>
        <div class="form-group">
     <input type="date"  class="form-control"name="fecha_ini" value="{{old('fecha_ini')}}" id="fecha_ini">
        </div>
    </div>
    <div class="col-md-3 col-12 text-center">
        <span> fecha final</span>
        <div class="form-group">
        <input type="date"class="form-control" name="fecha_fin" value="{{old('fecha_fin')}}" id="fecha_fin">
        </div>
    </div>
    <div class="col-md-3 col-12 text-center mt-4">
      
        <div class="form-group">
      <button type="submit" class="btn btn-success">Consultar </button>
        </div>
    </div>
    <div class="col-md-3 col-12 text-center">
        <span>Total de ingresos</span>
        <div class="form-group">
        <strong>{{$total}}</strong>
        </div>
    </div>
</div>
                            {!! Form::close() !!}
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
                   
         
<a href="{{route('sales.pdf',$sale)}}" class="btn btn-info"> <i class="fas fa-file-pdf"></i></a>

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
<script>
  window.onload= function(){
    var fecha = new Date();
    var mes =fecha.getMonth()+1;
    var dia =fecha.getDate();
    var ano = fecha.getFullYear();
    if(dia<10)
      dia='0'+dia;
    if(mes<10)
     mes='0'+mes
     document.getElementById('fecha_fin').value=ano+"-"+mes+"-"+dia;
    
  }
</script>
@endsection