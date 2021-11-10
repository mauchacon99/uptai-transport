 
@extends('admin.layout')

 
@section('content')
            <div class="row w-no-padding margin-b-30">
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
                                <h2 class="margin-b-5">Conductores</h2>
                                <p class="text-muted">Total Conductores</p>
                                <span class="float-right text-primary widget-r-m">{{$drivers}}</span>
                            </div>
                             
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
                                <h2 class="margin-b-5">Autobuses</h2>
                                <p class="text-muted">Total Autobuses</p>
                                <span class="float-right text-indigo widget-r-m">{{$cars}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
                                <h2 class="margin-b-5"> Salidas</h2>
                                <p class="text-muted">Total Salidas</p>
                                <span class="float-right text-success widget-r-m">{{$exits}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
                                <h2 class="margin-b-5"> Rutas</h2>
                                <p class="text-muted">Total Rutas</p>
                                <span class="float-right text-warning widget-r-m">{{ $routes}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-default">
                    Conductores  con mas salidas
                    </div>
                    <div class="card-body">
                        <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-bar-chart"></div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-default">
                    Estadistica de Salida de Vehiculo
                    </div>
                    <div class="card-body">
                    <div class="flot-chart">
                            <div class="flot-chart-content" id="flot-pie-chart"></div>
                        </div>
                    </div>
                </div>
                </div>
            </div> --}}
@endsection
 

@section('footer-assets')
<!-- Flot Chart-->
 <!-- Radial Chart-->
    <script src="{{ asset( 'admin/lib/radial-charts/jquery.knob.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/radial-charts/jquery.easypiechart.js' ) }}"></script>
    <script src="{{ asset( 'admin/js/radial.custom.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/flot/jquery.flot.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/flot/jquery.flot.resize.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/flot/jquery.flot.pie.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/flot/jquery.flot.time.js' ) }}"></script>
    <script src="{{ asset( 'admin/lib/flot/jquery.flot.tooltip.min.js' ) }}"></script>
    <script src="{{ asset( 'admin/js/flot.custom.js' ) }}"></script>
@endsection
