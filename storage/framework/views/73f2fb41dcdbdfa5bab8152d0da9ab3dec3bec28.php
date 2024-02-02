
<?php $__env->startSection('content'); ?>
            
            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Tabel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Anggota AMAN</li>
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
                        <a href="<?php echo e(url('anggota_aman/create')); ?>" class="btn btn-outline-success btn-rounded me-4"><i data-feather="user-plus"></i></a>
                        <table id="html5-extension" class="table dt-table-hover" style="width:100%">        
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Anggota</th>
                                    <th>Pengesahan</th>
                                    <th>Pengurus Daerah</th>
                                    <th>Komunitas</th>
                                    <th>Luas Wilayah Indikatif</th>
                                    <th>Luas Wilayah Pemetaan</th>
                                    <th>Jumlah Laki-Laki</th>
                                    <th>Jumlah Perempuan</th>
                                    <th>Status BRWA</th>
                                    <th>Profil</th>
                                    <th>PERDA</th>
                                    <th>SK Bupati</th>
                                    <th>PEREMPUAN AMAN</th>
                                    <th>Kader Pemula</th>
                                    <th>Kader Penggerak</th>
                                    <th>Kader Pemimpin</th>
                                    <th>BPAN Laki-laki</th>
                                    <th>BPAN Perempuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no=1;
                                ?>
                                <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($no++); ?></td>
                                    <td><?php echo e($data->nomor_anggota); ?></td>
                                    <td><?php echo e($data->pengesahan); ?></td>
                                    <td><?php echo e($data->pengurus_daerah); ?></td>
                                    <td><?php echo e($data->komunitas); ?></td>
                                    <td><?php echo e(number_format($data->luas_indikatif)); ?></td>
                                    <td><?php echo e(number_format($data->luas_pemetaan)); ?></td>
                                    <td><?php echo e(number_format($data->jml_laki_laki)); ?></td>
                                    <td><?php echo e(number_format($data->jml_perempuan)); ?></td>
                                    <td><?php echo e($data->status_brwa); ?></td>
                                    <td><?php echo e($data->profil); ?></td>
                                    <td><?php echo e($data->perda); ?></td>
                                    <td><?php echo e($data->sk_bupati); ?></td>
                                    <td><?php echo e($data->perempuan_aman); ?></td>
                                    <td><?php echo e($data->kader_pemula); ?></td>
                                    <td><?php echo e($data->kader_penggerak); ?></td>
                                    <td><?php echo e($data->kader_pemimpin); ?></td>
                                    <td><?php echo e($data->bpan_laki_laki); ?></td>
                                    <td><?php echo e($data->bpan_perempuan); ?></td>
                                    <td>
                                        <form method="POST" action="<?php echo e(url('anggota_aman/delete/'.$data->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <a class="btn btn-outline-success btn-icon mb-2 me-2 bs-popover rounded" href="<?php echo e(url('anggota_aman/edit/'.$data->id)); ?>" data-bs-container="body" data-bs-placement="top" data-bs-trigger="hover" data-bs-content="Edit">
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
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Anggota</th>
                                    <th>Pengesahan</th>
                                    <th>Pengurus Daerah</th>
                                    <th>Komunitas</th>
                                    <th>Luas Wilayah Indikatif</th>
                                    <th>Luas Wilayah Pemetaan</th>
                                    <th>Jumlah Laki-Laki</th>
                                    <th>Jumlah Perempuan</th>
                                    <th>Status BRWA</th>
                                    <th>Profil</th>
                                    <th>PERDA</th>
                                    <th>SK Bupati</th>
                                    <th>PEREMPUAN AMAN</th>
                                    <th>Kader Pemula</th>
                                    <th>Kader Penggerak</th>
                                    <th>Kader Pemimpin</th>
                                    <th>BPAN Laki-laki</th>
                                    <th>BPAN Perempuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/anggota_aman/index.blade.php ENDPATH**/ ?>