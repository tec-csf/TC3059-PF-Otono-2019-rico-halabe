@extends('layouts.login')

@section('content')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(../assets/images/background/login-register.jpg); background-size:cover;">
        <div class="login-box card">
            <div class="card-body"><br>
              <form class="form-horizontal form-material" id="loginform" method="POST" action="{{ route('login') }}"><br>
                  <a href="" class="text-center db"><img src="../assets/images/logo.png" alt="Home" /></a>
                  <br><br>
                  @csrf
                  <div class="form-group m-t-40">
                      <div class="col-xs-12">
                          <input id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="email" required placeholder="Correo electrónico" autofocus>
                          @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-xs-12">
                          <input id="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" required placeholder="Contraseña">
                          @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-12">
                          <div class="checkbox checkbox-primary pull-left p-t-0">
                              <input id="checkbox-signup" type="checkbox">
                              <label for="checkbox-signup"> Recordar mi cuenta </label><br><br>
                          </div>
                        <a href="{{ route('password.request') }}" id="to-recover" class="text-dark pull-right" style="float: left;">
                            <i class="fa fa-lock m-r-5"></i> ¿Olvidaste la contraseña?
                        </a>
                    </div>
                  </div>
                  <div class="form-group text-center m-t-20">
                      <div class="col-md-12">
                         <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" >Iniciar Sesión</button>
                      </div>
                  </div>
              </form>
          </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
@endsection
