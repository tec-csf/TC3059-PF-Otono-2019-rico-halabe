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
                <h3 class="text-themecolor"> <i class="mdi mdi-account"></i>   MI PERFIL</h3>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            @if (Session::has('status'))
                @if (Session::get('status'))
                    <div class="alert alert-success" role="alert" data-dismiss="alert">
                        {{ Session::get('response') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @else
                    <div class="alert alert-danger alert-dismissable fade show" role="alert" data-dismiss="alert">
                        {{ Session::get('response') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            @endif
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-12 col-xlg-12 col-md-12">
                    <div class="card">
                            <div class="card-body">
                                {{ Form::open(['action' => 'Profile@update', 'method' => 'PUT', 'class' => 'form-horizontal form-material']) }}
                                    <div class="form-group">
                                        <label class="col-md-12">Nueva Contraseña</label>
                                        <div class="col-md-12">
                                            {{ Form::password('new_password', ['class' => 'form-control form-control-line']) }}
                                            <!-- <input type="password" name="new_password" value="" placeholder="" class="form-control form-control-line"> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Confirmar Nueva Contraseña</label>
                                        <div class="col-md-12">
                                            {{ Form::password('confirm_new_password', ['class' => 'form-control form-control-line']) }}
                                            <!-- <input type="password" name="confirm_new_password" value="" placeholder="" class="form-control form-control-line"> -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            {{ Form::submit('Actualizar Contraseña', ['class' => 'btn btn-success'])}}
                                            <!-- <button type="submit" class="btn btn-success">Actualizar Contraseña</button> -->
                                        </div>
                                    </div>
                                {{ Form::close() }}
                                </form>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2018 MiPecera. <a href="kimosolutions.com">Creado por: Kimo Solutions</a> </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
@endsection
