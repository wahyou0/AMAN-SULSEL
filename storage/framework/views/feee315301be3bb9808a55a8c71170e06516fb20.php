
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

            <div class="row layout-top-spacing">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <button type="button" class="btn btn-outline-success btn-rounded me-4" data-bs-toggle="modal" data-bs-target="#inputFormModal">
                        <i data-feather="user-plus"></i> 
                    </button> <br><br>
                    <div class="widget-content widget-content-area br-8">
                        <table id="zero-config" class="table table-striped dt-table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Komunitas</th>
                                    <th>Alamat</th>
                                    <th>Nomor handphone</th>
                                    <th>Email</th>
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
                                    <td><?php echo e($data->nama_lengkap); ?></td>
                                    <td><?php echo e($data->nama_panggilan); ?></td>
                                    <td><?php echo e($data->tempat_lahir); ?></td>
                                    <td><?php echo e($data->tgl_lahir); ?></td>
                                    <td><?php echo e($data->jenis_kelamin); ?></td>
                                    <td><?php echo e($data->nama_komunitas); ?></td>
                                    <td><?php echo e($data->alamat); ?></td>
                                    <td><?php echo e($data->no_hp); ?></td>
                                    <td><?php echo e($data->email); ?></td>
                                    <td>
                                        <form method="POST" action="<?php echo e(url('anggota/delete/'.$data->id)); ?>">
                                            <?php echo csrf_field(); ?>
                                            <a class="btn btn-outline-success btn-icon mb-2 me-2" href="<?php echo e(url('anggota/edit/'.$data->id)); ?>">
                                                    <i data-feather="edit"></i>
                                            </a>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-outline-danger btn-icon mb-2 me-2 show-confirm">
                                                <i data-feather="trash-2"></i>
                                            </button>
                                        </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Nama Komunitas</th>
                                    <th>Alamat</th>
                                    <th>Nomor handphone</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>

             <!-- Modal -->
             <div class="modal fade inputForm-modal" id="inputFormModal" tabindex="-1" role="dialog" aria-labelledby="inputFormModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">

                    <div class="modal-header" id="inputFormModalLabel">
                        <h5 class="modal-title">Form Tambah <b>Data Kader</b></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(url('/anggota/store')); ?>" method="POST" enctype="multipart/form-data" class="mt-0">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i data-feather="user"></i> 
                                    </span>
                                    <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" aria-label="nma">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i data-feather="user"></i>
                                    </span>
                                    <input type="text" class="form-control" name="nama_panggilan" placeholder="Nama Panggilan" aria-label="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i data-feather="home"></i>
                                    </span>
                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" aria-label="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i data-feather="calendar"></i>
                                    </span>
                                    <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="input-group md-3">
                                    <span class="input-group-text">
                                        <i data-feather="user"></i>
                                    </span>
                                    <select name="jenis_kelamin" class="form-select" id="validationCustom04" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <div class="invalid-feedback">
                                    Please select a valid state.
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i data-feather="map-pin"></i>
                                    </span>
                                    <input type="text" class="form-control" name="nama_komunitas" placeholder="Nama Komunitas" aria-label="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i data-feather="home"></i>
                                    </span>
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" aria-label="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i data-feather="phone"></i>
                                    </span>
                                    <input type="text" class="form-control" name="no_hp" placeholder="Nomor HandPhone" aria-label="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">
                                        <i data-feather="mail"></i> 
                                    </span>
                                    <input type="email" class="form-control" name="email" placeholder="Email" aria-label="email">
                                </div>
                            </div>
                            
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Simpan</button>
                            </div>
                            
                        </form>

                    </div>
                    
                  </div>
                </div>
            </div>
            
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/anggota/index.blade.php ENDPATH**/ ?>