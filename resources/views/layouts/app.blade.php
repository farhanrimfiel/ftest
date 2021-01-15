<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="x-ua-compatible" content="ie=edge">

      <title>Ketsa Geo</title>

      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      
      <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.2.0/mapbox-gl-draw.css" type="text/css"/>
      <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
      <script src="https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
      <link href="https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.css" rel="stylesheet" />
      <style>
            body { margin: 0; padding: 0; }
            #map { position: absolute; top: 0; bottom: 0; width: 100%; }
            .calculation-box {
                height: 175px;
                width: 150px;
                position: absolute;
                bottom: 40px;
                left: 10px;
                background-color: rgba(255, 255, 255, 0.9);
                padding: 15px;
                text-align: center;
            }
             
            #calculated-area{}
     </style>
      
    </head>
    <body class="hold-transition layout-top-nav">
        <div class="wrapper">
            <!-- Navbar -->
              <nav class="main-header navbar navbar-expand-md navbar-light navbar-white" style='background-color:#FFAD29;'>
                <div class="container">
                  <a href="{{ url('/') }}" class="navbar-brand">
                    <img src="{{ asset('dist/img/myGeoExplorer.png') }}" alt="AdminLTE Logo" class="brand-image">
                  </a>
                  
                  <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                  </div>

                  <!-- Right navbar links -->
                  <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="{{ url('/login') }}">
                        DAFTAR | LOG MASUK
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                  </ul>
                </div>
              </nav>

            @yield('content')

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <div class="p-3">
                    <h5>&nbsp;</h5>
                    <a href="{{ url('/map') }}">MyGeo Explorer</a> <br>
                    <a href="{{ url('/panduanPengguna') }}">Panduan Pengguna</a> <br>
                    <a href="{{ url('/maklumBalas') }}">Maklum Balas</a> <br>
                    <a href="{{ url('/hubungiKami') }}">Hubungi Kami</a> <br>
                </div>
            </aside>

            <!-- Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="float-right d-none d-sm-inline"></div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2021 Ketsa Geo by Pipeline.</strong>
            </footer>
        </div>

        
        <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>        
        <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        
    </body>
</html>
