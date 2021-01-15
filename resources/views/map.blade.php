@extends('layouts.app')

@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Map</h1>
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
              <div class="col-lg-12">
                <div class="card" style="height:486px;">
                  <div class="card-header">
                    <h5 class="card-title m-0">Map</h5>
                  </div>
                  <div class="card-body">
                    <div id="map" style="width:70%;height:400px;margin-top:66px;"></div>
                    <div class="calculation-box" style="top:254px;">
                        <p>Draw a polygon using the draw tools.</p>
                        <div id="calculated-area"></div>
                    </div>
                  </div>
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

<script src="https://api.tiles.mapbox.com/mapbox.js/plugins/turf/v3.0.11/turf.min.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-draw/v1.2.0/mapbox-gl-draw.js"></script>
<script>
    // TO MAKE THE MAP APPEAR YOU MUST
    // ADD YOUR ACCESS TOKEN FROM
    // https://account.mapbox.com
    mapboxgl.accessToken = 'pk.eyJ1IjoiZmFyaGFucmkiLCJhIjoiY2tqd2p2cGtxMDJ2ODMzb3l5OTJuMjJ6ZSJ9.OsdgNMv2XB-tkWx_Ug4ivg';
    var map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/satellite-v9', //hosted style id
        center: [-91.874, 42.76], // starting position
        zoom: 12 // starting zoom
    });
 
    var draw = new MapboxDraw({
        displayControlsDefault: false,
            controls: {
            polygon: true,
            trash: true
        }
    });
    map.addControl(draw);
     
    map.on('draw.create', updateArea);
    map.on('draw.delete', updateArea);
    map.on('draw.update', updateArea);
 
    function updateArea(e) {
        var data = draw.getAll();
        var answer = document.getElementById('calculated-area');
        if (data.features.length > 0) {
            var area = turf.area(data);
            // restrict to area to 2 decimal points
            var rounded_area = Math.round(area * 100) / 100;
            answer.innerHTML =
                '<p><strong>' +
                rounded_area +
                '</strong></p><p>square meters</p>';
        } else {
            answer.innerHTML = '';
            if (e.type !== 'draw.delete'){
                alert('Use the draw tools to draw a polygon!');
            }
        }
    }
</script>

@stop