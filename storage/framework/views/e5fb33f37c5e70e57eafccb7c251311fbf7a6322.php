
<?php $__env->startSection('content'); ?>    
    
    <div class="row layout-spacing ">
        
        <!-- Content -->
        <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="d-flex justify-content-between">
                        <h3 class="">Profile Kader</h3>
                        
                    </div>
                    <div class="text-center user-info">
                        <img src="<?php echo e(asset('storage/'.$data->image)); ?>" alt="avatar" style="width: 9cm">
                        <p class="" style="font-size: 18pt;"><?php echo e($data->nama_lengkap); ?></p>
                    </div>
                    <div class="user-info-list">

                        <div class="">
                            <ul class="list-unstyled">
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="user"></i> <?php echo e($data->nama_panggilan); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="home"></i> <?php echo e($data->tempat_lahir); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="calendar"></i> <?php echo e($data->tgl_lahir); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="user"></i> <?php echo e($data->jenis_kelamin); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="map"></i> <?php echo e($data->nama_komunitas); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="map-pin"></i> <?php echo e($data->alamat); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="tablet"></i> <?php echo e($data->no_hp); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="mail"></i> <?php echo e($data->email); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="clipboard"></i> <?php echo e($data->status_kader); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="file-text"></i> <?php echo e($data->keterangan); ?>

                                </li>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <i data-feather="file-text"></i>Pelatihan Yang Telah Diikuti :
                                </li>
                                <?php $__currentLoopData = $keg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="contacts-block__item" style="font-size: 12pt;">
                                    <?php echo e($value); ?>

                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>

                            
                        </div>                                    
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/kader_aman/view.blade.php ENDPATH**/ ?>