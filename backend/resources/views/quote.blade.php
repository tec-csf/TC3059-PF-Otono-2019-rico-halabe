@extends('layouts.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-lg-6 align-self-center">
                <h3 class="text-themecolor"> <i class="mdi mdi-file-document"></i>   COTIZACIÓN #{{ $index }}</h3>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">

            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
                <div class="row">
                  <div class="col-lg-12 col-md-12">
                      <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="previewContainer" />
                                        <div class="section-header">
                                            <h3>RESUMEN:</h3>
                                        </div>
                                        <ul class="previewItems">
                                            @if (isset($quote[0]->liters))
                                                @if (isset($quote[0]->tank_id))
                                                  <li id="tank">Litros: {{ $quote[0]->liters }}</li>
                                                @else
                                                  <li id="tank">Litros: -</li>
                                                @endif
                                                @if (isset($quote[0]->water_id))
                                                  <li id="water">{{ $water[0]->name }}</li>
                                                @else
                                                  <li id="water">Agua: -</li>
                                                @endif
                                            @else
                                              @if (isset($quote[0]->tank_id))
                                                <li id="tank">Pecera: {{ $tank[0]->name }}</li>
                                              @else
                                                <li id="tank">Pecera: -</li>
                                              @endif
                                              @if (isset($quote[0]->water_id))
                                                <li id="water">{{ $water[0]->name }}</li>
                                              @else
                                                <li id="water">Agua: -</li>
                                              @endif
                                              @if (!isset($quote[0]->package))
                                                  @if (isset($quote[0]->floor_id))
                                                      <li id="floor">Suelo: {{ $floor[0]->name }}</li>
                                                  @else
                                                      <li id="floor">Suelo: -</li>
                                                  @endif
                                                  @if (isset($quote[0]->decoration_id))
                                                      <li id="decoration">Decoracion: {{ $decoration[0]->name }}</li>
                                                  @else
                                                      <li id="decoration">Decoracion: -</li>
                                                  @endif
                                                  @if (isset($quote[0]->ornament_id))
                                                      <li id="ornament">Adorno: {{ $ornament[0]->name }}</li>
                                                  @else
                                                      <li id="ornament">Adorno: -</li>
                                                  @endif
                                                  @if (isset($quote[0]->fish_id))
                                                      <li id="fish">Paquete de Peces: {{ $fish[0]->name }}</li>
                                                  @else
                                                      <li id="fish">Paquete de Peces: -</li>
                                                  @endif
                                              @else
                                                  @if (isset($quote[0]->package))
                                                      <li id="tank">Paquete: {{ $package[0]->name }}</li>
                                                  @else
                                                      <li id="tank">Paquete: -</li>
                                                  @endif
                                              @endif
                                            @endif
                                        </ul>
                                        <div class="row previewInfo">
                                            @if (isset($quote[0]->liters))
                                            <div class="col-md-12 previewSale">
                                                <div class="section-header">
                                                    <h3>Mantenimiento</h3>
                                                </div>
                                                 @if (isset($quote[0]->price_id))
                                                    <p>${{ number_format(intval($price[0]->maintenance)) }} de mantenimiento mensuales.</p>
                                                 @endif
                                            </div>
                                            @else
                                                <div class="col-md-12 previewSale">
                                                    <div class="section-header">
                                                        <h3>Venta</h3>
                                                    </div>
                                                     @if (isset($quote[0]->price_id))
                                                        <p>Inversión inicial de ${{ number_format(intval($price[0]->sale)) }} + ${{ number_format(intval($price[0]->maintenance)) }} de mantenimiento mensuales.</p>
                                                        <ul>
                                                            <li>Se incluye reposición de peces aumentando el 10% de la mensualidad</li>
                                                        </ul>
                                                     @endif
                                                </div>
                                                <div class="col-md-12 previewRent">
                                                    <div class="section-header">
                                                        <h3>Renta</h3>
                                                    </div>
                                                    @if (isset($quote[0]->price_id))
                                                        <p>${{ number_format(intval($price[0]->rent)) }} de mensualidad que incluye mantenimiento.</p>
                                                        <ul>
                                                            <li>Traslado de Acuario (otro piso, otro espacio, cambio de lugar)</li>
                                                            <li>Reposición de Equipo</li>
                                                            <li>Reposición de Peces</li>
                                                        </ul>
                                                    @endif
                                                </div>
                                                <div class="col-md-12"></div>
                                                <div class="col-md-12 previewBoth">
                                                    <div class="section-header">
                                                        <h3>Ademas incluye:</h3>
                                                    </div>
                                                    <ul>
                                                        <li>Mueble</li>
                                                        <li>Acuario con Equipo de Filtracion, Tapa e Iluminacion</li>
                                                        <li>Decoracion</li>
                                                        <li>Peces</li>
                                                        <li>Alimento</li>
                                                        <li>Garantizamos el equilibrio biologico del acuario</li>
                                                        <li>Visita de emergencia por telefono o si es necesario de manera fisica</li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </div>
                                      </div>
                                  </div>
                                  @if (!isset($quote[0]->liters))
                                  <div class="col-md-12">
                                      <div class="productContainer">
                                          @if (isset($quote[0]->tank_id))
                                            <img class="selectedProduct" src="{{ str_replace(' ', '', 'http://api.pecerasgratis.com/Peceras/'. str_replace('-', '', $tank[0]->name) .'/Pecera.png') }}" alt="Tanque {{ $tank[0]->name }}" />
                                          @endif
                                          @if (isset($quote[0]->water_id))
                                            <img class="selectedProduct" src="{{ str_replace(' ', '', 'http://api.pecerasgratis.com/Peceras/'. str_replace('-', '', $tank[0]->name) . '/Agua.png') }}" alt="{{ $water[0]->name }}" />
                                          @endif
                                          @if (isset($quote[0]->floor_id))
                                            <img class="selectedProduct" src="{{ str_replace(' ', '', 'http://api.pecerasgratis.com/Peceras/'. str_replace('-', '', $tank[0]->name) .'/Suelo/' . ucwords($floor[0]->name) . '.png') }}" alt="Suelo {{ $floor[0]->name }}" />
                                          @endif
                                          @if (isset($quote[0]->decoration_id))
                                              @if ($water[0]->water_type == 'sweet')
                                                <img class="selectedProduct" src="{{ str_replace(' ', '', 'http://api.pecerasgratis.com/Peceras/'. str_replace('-', '', $tank[0]->name) .'/Plantas/Dulce/' . $decoration[0]->name . '.png') }}" alt="Decoracion {{ $decoration[0]->name }}" />
                                              @else
                                                <img class="selectedProduct" src="{{ str_replace(' ', '', 'http://api.pecerasgratis.com/Peceras/'. str_replace('-', '', $tank[0]->name) .'/Plantas/Salada.png') }}" alt="Decoracion {{ $decoration[0]->name }}" />
                                              @endif
                                          @endif
                                          @if (isset($quote[0]->ornament_id))
                                            <img class="selectedProduct" src="{{ str_replace(' ', '', 'http://api.pecerasgratis.com/Peceras/'. str_replace('-', '', $tank[0]->name) .'/Adornos/'. ucwords($ornament[0]->name) .'.png') }}" alt="Adorno {{ $ornament[0]->name }}" />
                                          @endif
                                          @if (isset($quote[0]->fish_id))
                                              @if ($water[0]->water_type == 'sweet')
                                                <img class="selectedProduct" src="{{ str_replace(' ', '', 'http://api.pecerasgratis.com/Peceras/'. str_replace('-', '', $tank[0]->name) .'/Peces/Dulce/'. ucwords($fish[0]->name) .'.png') }}" alt="Paquete de Peces {{ $fish[0]->name }}" />
                                              @else
                                                <img class="selectedProduct" src="{{ str_replace(' ', '', 'http://api.pecerasgratis.com/Peceras/'. str_replace('-', '', $tank[0]->name) .'/Peces/Salada/'. ucwords($fish[0]->name) .'.png') }}" alt="Paquete de Peces {{ $fish[0]->name }}" />
                                              @endif
                                          @endif
                                      </div>
                                  </div>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
@endsection
