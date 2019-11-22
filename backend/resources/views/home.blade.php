@extends('layouts.app')

@section('content')
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-lg-6 align-self-center">
                <h3 class="text-themecolor"> <i class="mdi mdi-file-document"></i>   COTIZACIONES</h3>
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
                          <h4 class="card-title">Todas las cotizaciones</h4>
                          <div class="table-responsive m-t-40">
                              <table id="myTable" class="table table-hover table-striped">
                                  <thead>
                                      <tr>
                                          <th>ID Cotización</th>
                                          <th>Cliente</th>
                                          <th>Creación</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @php ($i = sizeof($quotes))
                                      @foreach ($quotes as $quote)
                                      @if (isset($quote->tank_id))

                                       <tr class='clickable-row' data-href='{{ url('/cotizacion/' . $quote->uid . '/' . $i) }}' style='cursor: pointer;'>
                                           <td><a href="{{ url('/cotizacion/' . $quote->uid . '/' . $i) }}">{{ $i }}</a></td>
                                           @if (isset($quote->first_name))
                                             <td>{{ $quote->first_name }} {{ $quote->last_name }}</td>
                                           @else
                                            <td>-</td>
                                           @endif
                                           <td><span class="text-muted"><i class="mdi mdi-calendar"></i> {{ $quote->updated_at }}</span> </td>
                                       </tr>
                                       @php ($i = $i - 1)
                                       @endif
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

    <script>
      $(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
      });
    </script>
@endsection
