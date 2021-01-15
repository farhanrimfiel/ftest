@extends('layouts.app')

@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark"></h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
          <div class="container">
            <div class="row">
              <!-- /.col-md-6 -->
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body login-card-body">
                    <p>Maklumat geospatial kini di hujung jari anda.
                    <br>Log masuk.</p>
                    <a href="#" id="hrefDaftar">Pengguna baru? Daftar sekarang.</a><br><br>
                    <form action="../../index3.html" method="post">
                      <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="ID Pengguna">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                        </div>
                      </div>
                      <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Kata Laluan">
                        <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-12 clearfix">
                          <a href="#" class="float-left">Lupa kata laluan?</a>
                          <button type="button" class="btn btn-primary float-right">Log Masuk</button>
                        </div>
                      </div>
                    </form>

                    <div class="social-auth-links text-center mb-3">
                    </div>

                  </div>
                  <!-- /.login-card-body -->
                </div>
              </div>
              <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

@stop