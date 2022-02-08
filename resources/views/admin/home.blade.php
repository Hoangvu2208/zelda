@extends('admin.main')

@section('content')

<section class="content">
  <div class="container-fluid">
    <h5 class="mb-2">Infomation of <strong style="color: red">Zelda</strong></h5>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-12">
        <a href="/admin/users/list">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
  
            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">{{$user}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <a href="{{route('product.list')}}">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="fas fa-bread-slice"></i></span>
  
            <div class="info-box-content">
              <span class="info-box-text">Products</span>
              <span class="info-box-number">{{$product}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <a href="{{route('admin.order.list')}}">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
  
            <div class="info-box-content">
              <span class="info-box-text">Orders</span>
              <span class="info-box-number">{{$order}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </a>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-md-3 col-sm-6 col-12">
        <a href="{{route('category.list')}}">
        <div class="info-box">
          <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Categories</span>
            <span class="info-box-number">{{$category}}</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </a>  
      </div>
      <!-- /.col -->
    </div>
  </div>
</section>

<section class="content">
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- interactive chart -->
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">
                <i class="far fa-chart-bar"></i>
                Turnover of this month 
              </h3>

              <div class="card-tools">
                Real time
                <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="interactive" style="height: 300px;"></div>
            </div>
            <!-- /.card-body-->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  

@endsection
@section('footer')
    <!-- FLOT CHARTS -->
<script src="/templates/admin/plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="/templates/admin/plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="/templates/admin/plugins/flot/plugins/jquery.flot.pie.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/templates/admin/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data        = [],
        totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [
        {
          data: getRandomData(),
        }
      ],
      {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      }
    )

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on') {
        setTimeout(update, updateInterval)
      }
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */



  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
@endsection