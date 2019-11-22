@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-lg-6 align-self-center">
                <h3 class="text-themecolor"> <i class="mdi mdi-help"></i>   CONTACTO</h3>
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
                              <h4 class="card-title">Formularios de Contacto</h4>
                              <div class="table-responsive m-t-40">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo Electrónico</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="form.html">#12</a></td>
                                            <td>Mary</td>
                                            <td>Adams</td>
                                            <td>adamsmary@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="form.html">#13</a></td>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>johndoe@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td><a href="form.html">#14</a></td>
                                            <td>Felipe</td>
                                            <td>Perez</td>
                                            <td>felipao@gmail.com</td>
                                        </tr>
                                    </tbody>
                                  </table>
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
