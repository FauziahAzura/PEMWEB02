<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Puskesmas App'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4">
        <a class="navbar-brand" href="/">Puskesmas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('pasien.index')); ?>">Pasien</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('paramedik.index')); ?>">Paramedik</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('unit-kerja.index')); ?>">Unit Kerja</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('periksa.index')); ?>">Periksa</a></li>
            </ul>
            <?php if(auth()->guard()->check()): ?>
            <form method="POST" action="<?php echo e(route('logout')); ?>" class="d-flex">
                <?php echo csrf_field(); ?>
                <span class="navbar-text text-white me-2"><?php echo e(Auth::user()->name); ?></span>
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
            <?php endif; ?>
        </div>
    </nav>

    <main class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer class="text-center mt-auto py-3 bg-dark text-white">
        &copy; <?php echo e(date('Y')); ?> Aplikasi Puskesmas - STT Nurul Fikri
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\praktikum1\resources\views/layouts/app.blade.php ENDPATH**/ ?>