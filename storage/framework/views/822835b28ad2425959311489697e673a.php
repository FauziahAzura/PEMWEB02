

<?php $__env->startSection('title', 'Data Pasien'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Pasien</h1>
    <a href="<?php echo e(route('pasien.create')); ?>" class="btn btn-primary mb-3">+ Tambah Pasien</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($pasien->nama); ?></td>
                <td><?php echo e($pasien->gender); ?></td>
                <td><?php echo e($pasien->tgl_lahir); ?></td>
                <td><?php echo e($pasien->alamat); ?></td>
                <td>
                    <a href="<?php echo e(route('pasien.edit', $pasien->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                    <form action="<?php echo e(route('pasien.destroy', $pasien->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum1\resources\views/pasien/index.blade.php ENDPATH**/ ?>