@extends('admin.dashboard')
@section('content')

  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Charts Luas Wilayah Adat Tiap Komunitas</h5>
            </div>

            <div class="widget-content">
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12- layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">AMAN Massenrempulu</h5>
            </div>
            @foreach ($laki as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach

            @foreach ($total as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach

            <div class="">
              <canvas id="myChartMaspul"></canvas>
            </div>
        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
      <div class="widget widget-chart-one">
          <div class="widget-heading">
              <h5 class="">Komunitas Adat Orong</h5>
          </div>
          @foreach ($lakiorong as $item)
          <p>Laki-laki = {{ $item }}</p>
          @endforeach
          
          @foreach ($wanitaorong as $item)
          <p>Perempuan = {{ $item }}</p>
          @endforeach

          @foreach ($totalorong as $item)
          <p>Total = {{ $item }} Orang</p>
          @endforeach

          <div class="">
            <canvas id="myChartOrong"></canvas>
          </div>
      </div>
    </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Bambapuang</h5>
            </div>
            @foreach ($laki_bambapuang as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_bambapuang as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_bambapuang as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartBambapuang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Patongloan</h5>
            </div>
            @foreach ($laki_patongloan as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_patongloan as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_patongloan as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartPatongloan"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Tangsa</h5>
            </div>
            @foreach ($laki_tangsa as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_tangsa as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_tangsa as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartTangsa"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Kalupini</h5>
            </div>
            @foreach ($laki_kalupini as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_kalupini as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_kalupini as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartkalupini"></canvas>
            </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Baroko</h5>
            </div>
            @foreach ($laki_baroko as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_baroko as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_baroko as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartbaroko"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Pana</h5>
            </div>
            @foreach ($laki_pana as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_pana as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_pana as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartpana"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Marena</h5>
            </div>
            @foreach ($laki_marena as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_marena as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_marena as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartmarena"></canvas>
            </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Mundan</h5>
            </div>
            @foreach ($laki_mundan as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_mundan as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_mundan as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartmundan"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Uru</h5>
            </div>
            @foreach ($laki_uru as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_uru as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_uru as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myCharturu"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Batu Noni</h5>
            </div>
            @foreach ($laki_batu_noni as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_batu_noni as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_batu_noni as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartbatunoni"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Angge Batu</h5>
            </div>
            @foreach ($laki_angge_batu as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_angge_batu as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_angge_batu as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartanggebatu"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Buntu Pema</h5>
            </div>
            @foreach ($laki_buntu_pema as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_buntu_pema as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_buntu_pema as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartbuntupema"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Ranga</h5>
            </div>
            @foreach ($laki_ranga as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_ranga as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_ranga as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartranga"></canvas>
            </div>
        </div>
      </div>
      
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Tallu Bamba</h5>
            </div>
            @foreach ($laki_tallu_bamba as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_tallu_bamba as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_tallu_bamba as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myCharttallubamba"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Tondon</h5>
            </div>
            @foreach ($laki_tondon as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_tondon as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_tondon as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myCharttondon"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Limbuang</h5>
            </div>
            @foreach ($laki_limbuang as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_limbuang as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_limbuang as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartlimbuang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Pasang</h5>
            </div>
            @foreach ($laki_pasang as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_pasang as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_pasang as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartpasang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Baringin</h5>
            </div>
            @foreach ($laki_baringin as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_baringin as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_baringin as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartbaringin"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Tapong</h5>
            </div>
            @foreach ($laki_tapong as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_tapong as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_tapong as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myCharttapong"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Matajang</h5>
            </div>
            @foreach ($laki_matajang as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_matajang as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_matajang as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartmatajang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Andulang</h5>
            </div>
            @foreach ($laki_andulang as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_andulang as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_andulang as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartandulang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Komunitas Adat Malino</h5>
            </div>
            @foreach ($laki_malino as $item)
            <p>Laki-laki = {{ $item }}</p>
            @endforeach
            
            @foreach ($wanita_malino as $item)
            <p>Perempuan = {{ $item }}</p>
            @endforeach
  
            @foreach ($total_malino as $item)
            <p>Total = {{ $item }} Orang</p>
            @endforeach
  
            <div class="">
              <canvas id="myChartmalino"></canvas>
            </div>
        </div>
      </div>

    </div>



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
          height: 300
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '70%',
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


  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    const ma = document.getElementById('myChartMaspul');
  
    new Chart(ma, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki), @json($wanita)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          // y: {
          //   beginAtZero: true
          // }
        }
      }
    });
  </script>


  <script>
    const ctx = document.getElementById('myChartOrong');
  
    new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($lakiorong), @json($wanitaorong)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const bp = document.getElementById('myChartBambapuang');

    new Chart(bp, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_bambapuang), @json($wanita_bambapuang)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const pa = document.getElementById('myChartPatongloan');

    new Chart(pa, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_patongloan), @json($wanita_patongloan)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const ta = document.getElementById('myChartTangsa');

    new Chart(ta, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_tangsa), @json($wanita_tangsa)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const kal = document.getElementById('myChartkalupini');

    new Chart(kal, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_kalupini), @json($wanita_kalupini)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const bar = document.getElementById('myChartbaroko');

    new Chart(bar, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_baroko), @json($wanita_baroko)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const pan = document.getElementById('myChartpana');

    new Chart(pan, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_pana), @json($wanita_pana)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const mar = document.getElementById('myChartmarena');

    new Chart(mar, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_marena), @json($wanita_marena)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const munda = document.getElementById('myChartmundan');

    new Chart(munda, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_mundan), @json($wanita_mundan)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const uru = document.getElementById('myCharturu');

    new Chart(uru, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_uru), @json($wanita_uru)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const batunoni = document.getElementById('myChartbatunoni');

    new Chart(batunoni, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_batu_noni), @json($wanita_batu_noni)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const angge = document.getElementById('myChartanggebatu');

    new Chart(angge, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_angge_batu), @json($wanita_angge_batu)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const pema = document.getElementById('myChartbuntupema');

    new Chart(pema, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_buntu_pema), @json($wanita_buntu_pema)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const ranga = document.getElementById('myChartranga');

    new Chart(ranga, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_ranga), @json($wanita_ranga)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const bamba = document.getElementById('myCharttallubamba');

    new Chart(bamba, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_tallu_bamba), @json($wanita_tallu_bamba)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

  <script>
    const tond = document.getElementById('myCharttondon');

    new Chart(tond, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_tondon), @json($wanita_tondon)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const limb = document.getElementById('myChartlimbuang');

    new Chart(limb, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_limbuang), @json($wanita_limbuang)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const pasa = document.getElementById('myChartpasang');

    new Chart(pasa, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_pasang), @json($wanita_pasang)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const bari = document.getElementById('myChartbaringin');

    new Chart(bari, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_baringin), @json($wanita_baringin)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const tapo = document.getElementById('myCharttapong');

    new Chart(tapo, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_tapong), @json($wanita_tapong)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const mata = document.getElementById('myChartmatajang');

    new Chart(mata, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_matajang), @json($wanita_matajang)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const andu = document.getElementById('myChartandulang');

    new Chart(andu, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_andulang), @json($wanita_andulang)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>
  
  <script>
    const mali = document.getElementById('myChartmalino');

    new Chart(mali, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'Jumlah',
          data: [@json($laki_malino), @json($wanita_malino)],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

@endsection