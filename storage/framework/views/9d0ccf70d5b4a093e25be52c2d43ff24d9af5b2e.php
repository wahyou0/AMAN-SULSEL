
<?php $__env->startSection('content'); ?>

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Kader AMAN</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="<?php echo e(url('kader_aman/update')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo e($data->nama_lengkap); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Panggilan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_panggilan" value="<?php echo e($data->nama_panggilan); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            
                                <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                is-invalid
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" accept="image/*" value="<?php echo e($data->image); ?>">
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat_lahir" value="<?php echo e($data->tempat_lahir); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input id="dateTimeFlatpickr" type="date" class="form-control flatpickr flatpickr-input active" name="tgl_lahir" value="<?php echo e($data->tgl_lahir); ?>" placeholder="<?php echo e($data->tgl_lahir); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="jenis_kelamin">
                                <option hidden value="<?php echo e($data->jenis_kelamin); ?>"><?php echo e($data->jenis_kelamin); ?></option>
                                <option value="Laki-laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Asal Komunitas</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="nama_komunitas">
                                <option hidden value="<?php echo e($data->nama_komunitas); ?>"><?php echo e($data->nama_komunitas); ?></option>
                                <?php $__currentLoopData = $anggota; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($a->nama_komunitas); ?>"><?php echo e($a->nama_komunitas); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" value="<?php echo e($data->alamat); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="no_hp" value="<?php echo e($data->no_hp); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputEmail2" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail2" name="email" value="<?php echo e($data->email); ?>">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <label class="col-form-label col-sm-2 pt-0">Status Kader</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_kader" id="gridRadios1" value="Aktif" <?php echo e($data->status_kader === 'Aktif' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="gridRadios1">
                                    Aktif
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_kader" id="gridRadios2" value="Tidak Aktif" <?php echo e($data->status_kader === 'Tidak Aktif' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="gridRadios2">
                                    Tidak Aktif
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="keterangan" value="<?php echo e($data->keterangan); ?>">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-sm-3">Pelatihan/Pendidikan Yang telah diikuti</label>
                        <div class="col-sm-8 sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="kegiatan_diikuti[]" value="belum mengikuti pelatihan" <?php echo e(in_array( 'belum mengikuti pelatihan', explode(',' , $data->kegiatan_diikuti)) ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="gridCheck2">
                                    Belum Mengikuti Pelatihan
                                </label>
                            </div>
                            
                            <?php $__currentLoopData = $cek; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="kegiatan_diikuti[]" value="<?php echo e($x->nama_kegiatan); ?> <?php echo e($x->tahun); ?>" <?php echo e(in_array($x->nama_kegiatan , explode(',' , $data->kegiatan_diikuti)) ? 'checked' : ''); ?> >
                            <label class="form-check-label" for="gridCheck2">
                                <?php echo e($x->nama_kegiatan); ?> <?php echo e($x->tahun); ?>

                            </label>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                      </div>

                    <div class="row mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>    
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/kader_aman/edit.blade.php ENDPATH**/ ?>