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

        <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                <div class="card-header">
                    <h5 class="card-title m-0">Anda perlukan sebarang bantuan atau pertanyaan?</h5>
                  </div>
                <div class="card-body">
                  <form role="form">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Kategori</label>
                          <select class="custom-select">
                            <option>Metadata</option>
                            <option>Permohonan Data-data Asas</option>
                            <option>Lain-lain</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Pertanyaan</label>
                          <textarea class="form-control" rows="3" placeholder="Masukkan pertanyaan..."></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label>Emel Personal</label>
                          <input type="text" class="form-control" placeholder="Masukkan emel...">
                        </div>
                      </div>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="btn btn-primary">Batal</button>
                      <button type="button" class="btn btn-primary" id="btnHantar">Hantar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
        <!-- /.content -->
      </div>
      
      <script>
        $(document).ready(function(){

        });

        $(document).on('click','#btnHantar',function(){
          alert("Maklum balas berjaya dihantar.");
        });
      </script>
@stop