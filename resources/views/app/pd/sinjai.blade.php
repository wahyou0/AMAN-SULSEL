@extends('app.home')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="heading-block center nomargin">
                <h3>SINJAI</h3>
            </div>

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget widget-chart-one">
                        
                        <h5 class="">Charts Luas Wilayah Adat AMAN SINJAI</h5>
                    </div>
        
                    <div class="widget-content">
                        <div id="chart"></div>
                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="fancy-title title-border">
                <h3>Tabel Komunitas</h3>
            </div>

            <div class="table-responsive">

                <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Komunitas</th>
                            <th>Luas Hutan Adat</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Status Brwa</th>
                            <th>PERDA</th>
                            <th>SK Bupati</th>
                            <th>PERBUB</th>
                            <th>PEREMPUAN AMAN</th>
                            <th>BPAN Laki-laki</th>
                            <th>BPAN Perempuan</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Komunitas</th>
                            <th>Luas Hutan Adat</th>
                            <th>Laki-laki</th>
                            <th>Perempuan</th>
                            <th>Status Brwa</th>
                            <th>PERDA</th>
                            <th>SK Bupati</th>
                            <th>PERBUB</th>
                            <th>PEREMPUAN AMAN</th>
                            <th>BPAN Laki-laki</th>
                            <th>BPAN Perempuan</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($sinjai as $data)
                            <tr>
                                <td>{{ $data->komunitas }}</td>
                                <td>{{ number_format($data->hutan_adat) }} ha</td>
                                <td>{{ number_format($data->jml_laki_laki) }}</td>
                                <td>{{ number_format($data->jml_perempuan) }}</td>
                                <td>{{ $data->status_brwa }}</td>
                                <td>{{ $data->perda }}</td>
                                <td>{{ $data->sk_bupati }}</td>
                                <td>{{ $data->perbub }}</td>
                                <td>{{ $data->perempuan_aman }}</td>
                                <th>{{ $data->bpan_laki_laki }}</th>
                                <th>{{ $data->bpan_perempuan }}</th>
                            </tr>
                        
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</section>

<script>
    var options = {
      series: [{
      name: 'Luas wilayah Indikatif',
      data: @json($indikatif)
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
        columnWidth: '100%',
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



@endsection