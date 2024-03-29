
<?php $__env->startSection('content'); ?>
            
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kader</li>
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
                            <a href="<?php echo e(url('kader_aman/create')); ?>" class="btn btn-outline-success btn-rounded me-4"><i data-feather="user-plus"></i></a>
                            <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Foto</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nama Panggilan</th>
                                        <th>Tempat Lahir</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Nama Komunitas</th>
                                        <th>Alamat</th>
                                        <th>Nomor handphone</th>
                                        <th>Pelatihan Yang Telah Diikuti</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    ?>
                                    <?php $__currentLoopData = $kader; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $keg = explode(',' , $data->kegiatan_diikuti);
                                    ?>
                                    <tr>
                                        <td><?php echo e($no++); ?></td>
                                        <td><img src="<?php echo e(asset('storage/'.$data->image)); ?>" alt="" style="width: 2cm"></td>
                                        <td><?php echo e($data->nama_lengkap); ?></td>
                                        <td><?php echo e($data->nama_panggilan); ?></td>
                                        <td><?php echo e($data->tempat_lahir); ?></td>
                                        <td><?php echo e($data->tgl_lahir); ?></td>
                                        <td><?php echo e($data->jenis_kelamin); ?></td>
                                        <td><?php echo e($data->nama_komunitas); ?></td>
                                        <td><?php echo e($data->alamat); ?></td>
                                        <td><?php echo e($data->no_hp); ?></td>
                                        <td>
                                            <?php $__currentLoopData = $keg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php echo e($value); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <form method="POST" action="<?php echo e(url('kader_aman/delete/'.$data->id)); ?>">
                                                <?php echo csrf_field(); ?>
                                                <a class="btn btn-outline-success btn-icon mb-2 me-2 bs-popover rounded" href="<?php echo e(url('kader_aman/view/'.$data->id)); ?>" data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Detail">
                                                    <i data-feather="eye"></i>
                                                </a>

                                                <a class="btn btn-outline-success btn-icon mb-2 me-2 bs-popover rounded" href="<?php echo e(url('kader_aman/edit/'.$data->id)); ?>" data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Edit">
                                                        <i data-feather="edit"></i>
                                                </a>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-outline-danger btn-icon mb-2 me-2 bs-popover rounded show-confirm" data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Hapus">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/kader_aman/index.blade.php ENDPATH**/ ?>