@extends('layouts.admin')
@section('title','Panel Admistrador')
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
            Panel Admistrador
            </h3>
            <nav aria-label="br@extends('layouts.admin')eadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Panel Admistrador</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
            @foreach( $totales as $compras)
            <div class="row">
                <div class="col-md-6 grid-margin">
                    <div class="card">
                        <div class="card-body btn-success">
                            <h4 class="mb-0">total ventas</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0">${{$compras->totalventa}}</h2>
                                        <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                            <i class="text-muted"></i>
                                        
                                        </div>
                                    </div>
                                    <a class="btn btn-info" href="{{route('sales.index')}}">ver detalles</a>
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-chart-pie  icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-md-6 grid-margin">
                    <div class="card">
                        <div class="card-body btn-info">
                            <h4 class=" mb-0">Total en inventario</h4>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-inline-block pt-3">
                                    <div class="d-md-flex">
                                        <h2 class="mb-0">${{$compras->totalcompra}}</h2>
                                        <div class="d-flex align-items-center ml-md-2 mt-2 mt-md-0">
                                            <i class=" text-muted"></i>
                                            
                                        </div>
                                    </div>
                                  <a class="btn btn-success" href="{{route('purchases.index')}}">ver detalles</a>
                                </div>
                                <div class="d-inline-block">
                                    <i class="fas fa-shopping-cart  icon-lg"></i>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
            </div>
          </div>

          <br>
          <div class="card">
              
          <div class="card-body">
          <h4>Productos con menos stock </h4>
              <br>
          <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Image</th>
                            <th>Stock</th>
                           <th>Precio venta</th>
                           
                         
                           
                       
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($produmenosstock as $product)
                     
                        <tr>
                         <th scope="row">{{$product->id}}</th>
                         <td>
                             <a href="">{{$product->name}}</a>
                         </td>
                         <td><img src="image/{{$product->image}}" class="img-fluid"  alt=""  ></td>
                         <td>{{$product->stock}}</td>
                            <td>{{$product->sell_price}}</td>
                         
                    
                            
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
          </div>
          <br>

          <div class="card">
            <div class="card-body">
            <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ventas por mes</h4>
                  <canvas id="ventas"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Compras por mes</h4>
                  <canvas id="Compras"></canvas>
                </div>
              </div>
            </div>
          </div>
            
            </div>
          </div>
          <br>
          <div class="card">
            <div class="card-body">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ventas por dia </h4>
                  <canvas id="ventas_dias"></canvas>
                </div>
              </div>
              </div>


            </div>
</div>
@endsection
@section('scripts')
{!! Html::script('melody/js/data-table.js') !!}
{!! Html::script('melody/js/chart.js') !!}

<script>
 const compras = document.getElementById('Compras').getContext('2d');
const compra = new Chart(compras, {
    type: 'bar',
    data: {
        labels: [<?php foreach($comprasmes as $comp){
            setlocale(LC_TIME,'es_ES','Spanish_Spain','Spanish');
            $mes_traducid=strftime('%B',strtotime($comp->mes));
            echo '"'.$mes_traducid.'",';
        }  ?>],
        datasets: [{
            label: 'compras ',
            data: [<?php 
            foreach($comprasmes as $comp){
            echo ''.$comp->totalmes.',';
            } ?>],
            backgroundColor: [
                
                'rgba(54, 57, 240, 0.2)',
               'rgba(102, 227, 241, 0.2)',
             
               
            ],
            borderColor: [
             
                'rgba(54, 57, 240, 1)',
               'rgba(102, 227, 241,1)',
             
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ctx = document.getElementById('ventas').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php foreach($ventasmes as $reg){
            setlocale(LC_TIME,'es_ES','Spanish_Spain','Spanish');
            $mes_traducido=strftime('%B',strtotime($reg->mes));
            echo '"'.$mes_traducido.'",';
        }  ?>],
        datasets: [{
            label: 'ventas ',
            data: [<?php 
            foreach($ventasmes as $reg){
            echo ''.$reg->totalmes.',';
            } ?>],
            backgroundColor: [
                
                'rgba(54, 162, 235, 0.2)',
             
               
            ],
            borderColor: [
             
                'rgba(54, 162, 235, 1)',
              
             
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

const ventas_dias = document.getElementById('ventas_dias').getContext('2d');
const ventas = new Chart(ventas_dias, {
    type: 'bar',
    data: {
        labels: [<?php foreach($ventasdia as $vent){
          $dia =$vent->dia;
            echo '"'.$dia.'",';
        }  ?>],
        datasets: [{
            label: 'ventas_dias',
            data: [<?php 
            foreach($ventasdia as $vent){
            echo ''.$vent->totaldia.',';
            } ?>],
            backgroundColor: [
                
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(255, 159, 64, 0.2)',
               'rgba(153, 102, 255, 0.2)',
               'rgba(255, 159, 64, 0.2)',
               'rgba(63, 240, 10, 0.2)',
               'rgba(54, 57, 240, 0.2)',
               'rgba(102, 227, 241, 0.2)',
               'rgba(252, 57, 4, 0.2)'
             
               
            ],
            borderColor: [
             
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(255, 159, 64, 1)',
               'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(63, 240, 10, 1)',
               'rgba(54, 57, 240, 1)',
               'rgba(102, 227, 241,1)',
               'rgba(252, 57, 4, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
          </script>
@endsection

