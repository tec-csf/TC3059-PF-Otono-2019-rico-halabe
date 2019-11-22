@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-lg-6 align-self-center">
                <h3 class="text-themecolor"> <i class="mdi mdi-account-multiple"></i>   CLIENTES</h3>
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
                          <h4 class="card-title">Todos los clientes</h4>
                          <div class="table-responsive m-t-40">
                              <table id="myTable" class="table table-hover table-striped">
                                  <thead>
                                      <tr>
                                          <th>Nombre</th>
                                          <th>Apellido</th>
                                          <th>Correo Electrónico</th>
                                          <th>Teléfono</th>
                                          <th>Cotizaciones</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($clients as $client)
                                       <tr>
                                           <td>{{ $client->first_name }}</td>
                                           <td>{{ $client->last_name }}</td>
                                           <td>{{ $client->email }}</td>
                                           <td>{{ $client->phone_number }}</td>
                                           <td>{{ $client->quotes }}</td>
                                       </tr>
                                      @endforeach
                                  </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
@endsection
