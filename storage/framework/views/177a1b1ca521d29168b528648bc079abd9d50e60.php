
<?php $__env->startSection('content'); ?>

  <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h5 class="">Charts Luas Wilayah Adat Tiap  di AMAN Massenrempulu</h5>
            </div>

            <div class="widget-content">
                <div id="chart"></div>
            </div>
        </div>
    </div>

    <div class="page-meta">
      <nav class="breadcrumb-style-one" aria-label="breadcrumb">
          <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Charts</a></li>
              <li class="breadcrumb-item active" aria-current="page">Jumlah laki-laki dan Perempuan tiap Komunitas di AMAN Massenrempulu</li>
              <br><br>
          </ol>
      </nav>
    </div>

    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12- layout-spacing">
        <div class="widget widget-chart-one">
                <h6 class="">AMAN Massenrempulu</h6>

            <?php $__currentLoopData = $total; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <small><p>Total = <?php echo e($item); ?> Jiwa</p></small>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="">
              <canvas id="myChartMaspul"></canvas>
            </div>
        </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
      <div class="widget widget-chart-one">
              <h6 class=""> Orong</h6>
          <?php $__currentLoopData = $totalorong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <small><p>Total = <?php echo e($item); ?> Jiwa</p></small>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          <div class="">
            <canvas id="myChartOrong"></canvas>
          </div>
      </div>
    </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
              <h6 class=""> Bambapuang</h6>
            <?php $__currentLoopData = $laki_bambapuang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_bambapuang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_bambapuang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartBambapuang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
                <h6 class=""> Patongloan</h6>
            <?php $__currentLoopData = $laki_patongloan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_patongloan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_patongloan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartPatongloan"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Tangsa</h6>
            <?php $__currentLoopData = $laki_tangsa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_tangsa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_tangsa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartTangsa"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Kalupini</h6>
            <?php $__currentLoopData = $laki_kalupini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_kalupini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_kalupini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartkalupini"></canvas>
            </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Baroko</h6>
            <?php $__currentLoopData = $laki_baroko; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_baroko; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_baroko; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartbaroko"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Pana</h6>
            <?php $__currentLoopData = $laki_pana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_pana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_pana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartpana"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Marena</h6>
            <?php $__currentLoopData = $laki_marena; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_marena; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_marena; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartmarena"></canvas>
            </div>
        </div>
      </div>
      
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Mundan</h6>
            <?php $__currentLoopData = $laki_mundan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_mundan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_mundan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartmundan"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Uru</h6>
            <?php $__currentLoopData = $laki_uru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_uru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_uru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myCharturu"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Batu Noni</h6>
            <?php $__currentLoopData = $laki_batu_noni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_batu_noni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_batu_noni; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartbatunoni"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Angge Batu</h6>
            <?php $__currentLoopData = $laki_angge_batu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_angge_batu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_angge_batu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartanggebatu"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Buntu Pema</h6>
            <?php $__currentLoopData = $laki_buntu_pema; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_buntu_pema; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_buntu_pema; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartbuntupema"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Ranga</h6>
            <?php $__currentLoopData = $laki_ranga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_ranga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_ranga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartranga"></canvas>
            </div>
        </div>
      </div>
      
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Tallu Bamba</h6>
            <?php $__currentLoopData = $laki_tallu_bamba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_tallu_bamba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_tallu_bamba; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myCharttallubamba"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Tondon</h6>
            <?php $__currentLoopData = $laki_tondon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_tondon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_tondon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myCharttondon"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Limbuang</h6>
            <?php $__currentLoopData = $laki_limbuang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_limbuang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_limbuang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartlimbuang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Pasang</h6>
            <?php $__currentLoopData = $laki_pasang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_pasang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_pasang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartpasang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Baringin</h6>
            <?php $__currentLoopData = $laki_baringin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_baringin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_baringin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartbaringin"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Tapong</h6>
            <?php $__currentLoopData = $laki_tapong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_tapong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_tapong; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myCharttapong"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Matajang</h6>
            <?php $__currentLoopData = $laki_matajang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_matajang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_matajang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartmatajang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Andulang</h6>
            <?php $__currentLoopData = $laki_andulang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_andulang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_andulang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <div class="">
              <canvas id="myChartandulang"></canvas>
            </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            
                <h6 class=""> Malino</h6>
            <?php $__currentLoopData = $laki_malino; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Laki-laki = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php $__currentLoopData = $wanita_malino; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Perempuan = <?php echo e($item); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
            <?php $__currentLoopData = $total_malino; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p>Total = <?php echo e($item); ?> Jiwa</p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
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
          data: <?php echo json_encode($luas, 15, 512) ?>
        }, {
          name: 'Luas wilayah Pemetaasn',
          data: <?php echo json_encode($peta, 15, 512) ?>
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
    const ma = document.getElementById('myChartMaspul');
  
    new Chart(ma, {
      type: 'pie',
      data: {
        labels: ['Laki-laki', 'Perempuan'],
        datasets: [{
          label: 'laki-laki',
          data: [<?php echo json_encode($laki, 15, 512) ?>, <?php echo json_encode($wanita, 15, 512) ?>],
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
      name: 'Remove Data',
        handler(chart) {
          chart.data.labels.splice(-1, 1); // remove the label first

          chart.data.datasets.forEach(dataset => {
            dataset.data.pop();
          }); 

          chart.update();
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
          data: [<?php echo json_encode($lakiorong, 15, 512) ?>, <?php echo json_encode($wanitaorong, 15, 512) ?>],
          borderWidth: 2
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
          data: [<?php echo json_encode($laki_bambapuang, 15, 512) ?>, <?php echo json_encode($wanita_bambapuang, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_patongloan, 15, 512) ?>, <?php echo json_encode($wanita_patongloan, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_tangsa, 15, 512) ?>, <?php echo json_encode($wanita_tangsa, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_kalupini, 15, 512) ?>, <?php echo json_encode($wanita_kalupini, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_baroko, 15, 512) ?>, <?php echo json_encode($wanita_baroko, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_pana, 15, 512) ?>, <?php echo json_encode($wanita_pana, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_marena, 15, 512) ?>, <?php echo json_encode($wanita_marena, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_mundan, 15, 512) ?>, <?php echo json_encode($wanita_mundan, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_uru, 15, 512) ?>, <?php echo json_encode($wanita_uru, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_batu_noni, 15, 512) ?>, <?php echo json_encode($wanita_batu_noni, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_angge_batu, 15, 512) ?>, <?php echo json_encode($wanita_angge_batu, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_buntu_pema, 15, 512) ?>, <?php echo json_encode($wanita_buntu_pema, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_ranga, 15, 512) ?>, <?php echo json_encode($wanita_ranga, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_tallu_bamba, 15, 512) ?>, <?php echo json_encode($wanita_tallu_bamba, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_tondon, 15, 512) ?>, <?php echo json_encode($wanita_tondon, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_limbuang, 15, 512) ?>, <?php echo json_encode($wanita_limbuang, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_pasang, 15, 512) ?>, <?php echo json_encode($wanita_pasang, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_baringin, 15, 512) ?>, <?php echo json_encode($wanita_baringin, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_tapong, 15, 512) ?>, <?php echo json_encode($wanita_tapong, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_matajang, 15, 512) ?>, <?php echo json_encode($wanita_matajang, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_andulang, 15, 512) ?>, <?php echo json_encode($wanita_andulang, 15, 512) ?>],
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
          data: [<?php echo json_encode($laki_malino, 15, 512) ?>, <?php echo json_encode($wanita_malino, 15, 512) ?>],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
        }
      }
    });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/charts/massenrempulu.blade.php ENDPATH**/ ?>