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
                <h3 class="text-themecolor"> <i class="mdi mdi-wrench"></i>   ADMINISTRACIÓN</h3>
            </div>
            <!-- <div class="col-lg-6">
              <div class="btn-group pull-right">
                  <a href="add.html">
                  <button type="button" class="btn waves-effect waves-light btn-secondary">+ Agregar Usuario</button>
                  </a>
              </div>
            </div> -->
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
            <!-- Column -->
            <div class="col-lg-12 col-xlg-12 col-md-2">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <!-- <th>Apellido</th> -->
                                    <th>Correco Electrónico</th>
                                    <!-- <th>Teléfono</th> -->
                                    <th>Status</th>
                                    <!-- <th>Eliminar Usuario</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <!-- <td></td> -->
                                    <td>{{ $user->email }}</td>
                                    <!-- <td>5554154967</td> -->
                                    <td>{{ $user->created_at }}</td>
                                    <!-- <td></td> -->
                                </tr>
                                @endforeach
                                <!-- <tr>
                                    <td>Alejandro</td>
                                    <td>Lopez</td>
                                    <td>alexlop@gmail.com</td>
                                    <td>5556958754</td>
                                    <td>Pre-Activado</td>
                                    <td><button type="button" class="btn waves-effect waves-light btn-rounded btn-secondary" alt="alert" id="sa-warning">X Eliminar Usuario</button></td>
                                </tr> -->
                            </tbody>
                        </table>
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
