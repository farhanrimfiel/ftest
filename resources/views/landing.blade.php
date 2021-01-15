@extends('layouts.app')

@section('content')

<style>
.card{
  opacity:0.3;
  background-color:orange;
}

.card p{
  opacity:none;
}
</style>

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
              <div class="col-lg-3">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title m-0"><span style="color:#FFE802;">Pengumuman</span></h5>
                  </div>
                  <div class="card-body">
                    <span style="color:#FFE802;">1 JAN 2021</span>
                    <p>Makluman: <br>
                    Selamat tahun baru kepada semua pengguna MyGeo Explorer</p>
                    <span style="color:#FFE802;">25 DIS 2020</span>
                    <p>Peringatan: <br>
                    Agensi hendaklah mengemaskini metadata masing-masing</p>
                    <span style="color:#FFE802;">23 DIS 2020</span>
                    <p>Metadata Baharu: <br>
                    Grid for Climate Change Projection for Peninsular Malaysia</p>
                    <span style="color:#FFE802;">21 DIS 2020</span>
                    <p>Pengemaskinian: <br>
                    Climate Change Projection for Peninsular Malaysia (2010-2099)</p>
                    <span style="color:#FFE802;">18 DIS 2020</span>
                    <p>Metadata Baharu: Taman Laut Negeri Terengganu</p> <br>
                  </div>
                </div>
              </div>
              <div class="col-lg-7"></div>
              <div class="col-lg-2">
                <div class="card">
                  <div class="card-body">
                    <a href="#">Metadata</a> <br> <hr>
                    <a href="#">Permohonan Data Asas</a> <br> <hr>
                    <a href="#">Tutorial</a> <br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@stop