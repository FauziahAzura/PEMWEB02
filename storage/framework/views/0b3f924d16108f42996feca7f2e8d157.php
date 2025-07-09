

<?php $__env->startSection('title', 'Data Paramedik'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Paramedik</h1>
    <a href="<?php echo e(route('paramedik.create')); ?>" class="btn btn-primary mb-2">+ Tambah Paramedik</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Gender</th>
                <th>Tempat Lahir</th>
                <th>Kategori</th>
                <th>Alamat</th>
                <th>Unit Kerja</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paramedik): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($paramedik->nama); ?></td>
                <td><?php echo e($paramedik->gender); ?></td>
                <td><?php echo e($paramedik->tmp_lahir); ?></td>
                <td><?php echo e($paramedik->kategori); ?></td>
                <td><?php echo e($paramedik->alamat); ?></td>
                <td><?php echo e($paramedik->unit_kerja_id); ?></td>
                <td>
                    <a href="<?php echo e(route('paramedik.edit', $paramedik->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('paramedik.destroy', $paramedik->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum1\resources\views/paramedik/index.blade.php ENDPATH**/ ?>