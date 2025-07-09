

<?php $__env->startSection('title', 'Beranda'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="alert alert-info text-center">
                <h2>Selamat Datang di Sistem Informasi Puskesmas</h2>
                <p>Kelola data pasien, paramedik, dan pemeriksaan dengan mudah.</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3><?php echo e($pasienCount ?? 0); ?></h3>
                    <p>Jumlah Pasien</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-injured"></i>
                </div>
                <a href="<?php echo e(url('/pasien')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?php echo e($paramedikCount ?? 0); ?></h3>
                    <p>Jumlah Paramedik</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-md"></i>
                </div>
                <a href="<?php echo e(url('/paramedik')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?php echo e($periksaCount ?? 0); ?></h3>
                    <p>Total Pemeriksaan</p>
                </div>
                <div class="icon">
                    <i class="fas fa-stethoscope"></i>
                </div>
                <a href="<?php echo e(url('/periksa')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?php echo e($unitCount ?? 0); ?></h3>
                    <p>Unit Kerja</p>
                </div>
                <div class="icon">
                    <i class="fas fa-hospital"></i>
                </div>
                <a href="<?php echo e(url('/unit-kerja')); ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum1\resources\views/beranda.blade.php ENDPATH**/ ?>