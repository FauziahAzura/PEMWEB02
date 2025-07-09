

<?php $__env->startSection('title', 'Data Kelurahan'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Kelurahan</h1>
    <a href="<?php echo e(route('kelurahan.create')); ?>" class="btn btn-primary mb-2">+ Tambah Kelurahan</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>ID Kecamatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelurahan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($kelurahan->nama); ?></td>
                <td><?php echo e($kelurahan->kec_id); ?></td>
                <td>
                    <a href="<?php echo e(route('kelurahan.edit', $kelurahan->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('kelurahan.destroy', $kelurahan->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum1\resources\views/kelurahan/index.blade.php ENDPATH**/ ?>