

<?php $__env->startSection('title', 'Data Pemeriksaan'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Data Pemeriksaan</h1>
    <a href="<?php echo e(route('periksa.create')); ?>" class="btn btn-primary mb-2">+ Tambah Periksa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tanggal</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>Tgl Lahir</th>
                <th>Keterangan</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($p->tanggal); ?></td>
                <td><?php echo e($p->berat); ?> kg</td>
                <td><?php echo e($p->tinggi); ?> cm</td>
                <td><?php echo e($p->tgl_lahir); ?></td>
                <td><?php echo e($p->keterangan); ?></td>
                <td><?php echo e($p->pasien_id); ?></td>
                <td><?php echo e($p->dokter_id); ?></td>
                <td>
                    <a href="<?php echo e(route('periksa.edit', $p->id)); ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?php echo e(route('periksa.destroy', $p->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\praktikum1\resources\views/periksa/index.blade.php ENDPATH**/ ?>