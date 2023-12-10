
<?php $__env->startSection('content'); ?>
            
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kegiatan AMAN</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!--  BEGIN BREADCRUMBS  -->
           
            <!--  END BREADCRUMBS  -->

        <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <a href="<?php echo e(url('kegiatan_aman/create')); ?>" class="btn btn-outline-success btn-rounded me-4"><i data-feather="user-plus"></i></a>
                        <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tempat</th>
                                    <th>Tahun</th>
                                    <th>Pelaksana</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                ?>
                                <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($data->tempat); ?></td>
                                    <td><?php echo e($data->tahun); ?></td>
                                    <td><?php echo e($data->pelaksana); ?></td>
                                    <td><?php echo e($data->nama_kegiatan); ?></td>
                                    <td>
                                        <form method="POST" action="<?php echo e(url('kegiatan_aman/delete/'.$data->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <a class="btn btn-outline-success btn-icon mb-2 me-2" href="<?php echo e(url('kegiatan_aman/edit/'.$data->id)); ?>">
                                                    <i data-feather="edit"></i>
                                            </a>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-outline-danger btn-icon mb-2 me-2 show-confirm">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                            
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Tempat</th>
                                    <th>Tahun</th>
                                    <th>Pelaksana</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/kegiatan_aman/index.blade.php ENDPATH**/ ?>