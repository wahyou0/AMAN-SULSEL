
<?php $__env->startSection('content'); ?>

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

    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 layout-spacing">
        <div class="widget widget-chart-one">

              <h6 class="">Jumlah Laki-Laki dan Perempuan</h6>

            <?php $__currentLoopData = $laki; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki : <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan : <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php $__currentLoopData = $total; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total : <?php echo e($item); ?> Orang</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="">
              <canvas id="myChartWilayah"></canvas>
            </div>
        </div>
    </div>



    <script>
        var options = {
          series: [{
          name: 'Luas wilayah Indikatif',
          data: <?php echo json_encode($luas, 15, 512) ?>
        }, {
          name: 'Luas wilayah Pemetaasn',
          data: <?php echo json_encode($peta, 15, 512) ?>
        }],
          chart: {
          type: 'bar',
          height: 350
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
          categories: <?php echo json_encode($kom, 15, 512) ?>,
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
      const wil = document.getElementById('myChartWilayah');

      new Chart(wil, {
        type: 'pie',
        data: {
          labels: ['Laki-laki', 'Perempuan'],
          datasets: [{
            label: 'Jumlah',
            data: [<?php echo json_encode($laki, 15, 512) ?>, <?php echo json_encode($wanita, 15, 512) ?>],
            borderWidth: 1
          }]
        },
        options: {
          scales: {
              x: {
              max: 100
            },
            y: {
              max: 100
            }
          }
        }
      });
    </script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/home.blade.php ENDPATH**/ ?>