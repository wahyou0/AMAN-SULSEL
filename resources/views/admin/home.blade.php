@extends('admin.dashboard')
@section('content')

    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Charts Luas Wilayah Adat Tiap Komunitas</h5>
            </div>

            <div class="widget-content">
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Charts Jumlah Laki-Laki dan Perempuan</h5>
            </div>

            <div class="widget-content">
            </div>
        </div>
    </div>
    <div id="pie"></div>



    <script>
        var options = {
          series: [{
          name: 'Luas wilayah Indikatif',
          data: @json($luas)
        }, {
          name: 'Luas wilayah Pemetaasn',
          data: @json($peta)
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '40%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: @json($kom),
        },
        yaxis: {
          title: {
            text: 'Hektare'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " ha"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>

    <script>
        var options = {
          series: @json($tambah),
          chart: {
          type: 'polarArea',
        },
        stroke: {
          colors: ['#fff']
        },
        labels: ['laki-laki','perempuan','total'],
        fill: {
          opacity: 0.8
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#pie"), options);
        chart.render();

    </script>



@endsection