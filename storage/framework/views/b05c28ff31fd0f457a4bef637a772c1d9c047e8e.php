
<?php $__env->startSection('content'); ?>

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kegiatan Kader</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="<?php echo e(url('kegiatan/store')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Kader</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="id_kader">
                                <option value="Laki-laki">Laki - Laki</option>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($a->id); ?>"><?php echo e($a->nama_lengkap); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-sm-2">Kegiatan Kader</label>
                        <div class="col-sm-10 sm-2">
                            <?php $__currentLoopData = $kegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="kegiatan[]" value="<?php echo e($x->nama_kegiatan); ?> <?php echo e($x->tahun); ?>">
                            <label class="form-check-label" for="gridCheck2">
                                <?php echo e($x->nama_kegiatan); ?> <?php echo e($x->tahun); ?>

                            </label>
                          </div>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="row mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        new TomSelect("#select-beast",{
            create: true,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });
    </script>

<?php $__env->stopSection(); ?>     c
<?php echo $__env->make('admin.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\AMAN-Sulsel\resources\views/admin/kegiatan/create.blade.php ENDPATH**/ ?>