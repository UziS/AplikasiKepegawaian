<!DOCTYPE html>
<html lang="en">

<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('assets/img/logo/logo.png') }}" rel="icon">
  <title>RuangAdmin - Dashboard</title>
  <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Select2 -->
  <link href="{{ asset('assets/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
  <!-- Bootstrap DatePicker -->  
  <link href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" >
  <!-- Bootstrap Touchspin -->
  <link href="{{ asset('assets/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" >
  <!-- ClockPicker -->
  <link href="{{ asset('assets/vendor/clock-picker/clockpicker.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/ruang-admin.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}">
  <link href="{{ asset('assets/jquery.dataTables.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/datatables.min.css') }}" rel="stylesheet">
  <script src="{{ asset('assets/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/jquery-3.3.1.js') }}"></script>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
      @include('layouts/sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
          @include('layouts/navbar')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          
          <!-- Content -->
            @yield('content')
          <!-- Content -->
          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">Ruang Admin</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/js/demo/chart-area-demo.js') }}"></script>
  <script src="{{ asset('assets/js/customjs.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.js') }}"></script>
  {{-- <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script> --}}
  <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ asset('assets/vendor/select2/dist/js/select2.min.js') }}"></script>
  <!-- Bootstrap Datepicker -->
  <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <!-- Bootstrap Touchspin -->
  <script src="{{ asset('assets/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}"></script>
  <!-- ClockPicker -->
  <script src="{{ asset('assets/vendor/clock-picker/clockpicker.js') }}"></script>
  <!-- RuangAdmin Javascript -->
  <script src="{{ asset('assets/js/ruang-admin.min.js') }}"></script>
  <!-- Javascript for this page -->
  <script>
    $(document).ready(function () {
      // Bootstrap Date Picker
      $('#simple-date1 .input-group.date').datepicker({
        format: 'dd/mm/yyyy',
        todayBtn: 'linked',
        todayHighlight: true,
        autoclose: true,        
      });
    });
  </script>
  <script>
    $(document).ready( function () {
      $('#dataTableHover_wrapper').DataTable();
    } );
  </script>
</body>
</html>