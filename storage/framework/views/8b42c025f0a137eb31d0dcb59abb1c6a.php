<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $__env->yieldContent('title', 'AdminLTE Manual'); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('adminlte/plugins/fontawesome-free/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('adminlte/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <!-- Right navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <form action="<?php echo e(route('logout')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-sm btn-danger">Logout</button>
                </form>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="<?php echo e(url('/')); ?>" class="brand-link">
            <span class="brand-text font-weight-light">My Admin</span>
        </a>
        <div class="sidebar">
            <nav>
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <li class="nav-item">
                        <a href="<?php echo e(url('/beranda')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(url('/kelurahan')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-map"></i>
                            <p>Kelurahan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(url('/unit-kerja')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>Unit Kerja</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(url('/paramedik')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user-md"></i>
                            <p>Paramedik</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(url('/periksa')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-notes-medical"></i>
                            <p>Periksa</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo e(url('/pasien')); ?>" class="nav-link">
                            <i class="nav-icon fas fa-user-injured"></i>
                            <p>Pasien</p>
                        </a>
                    </li>

                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content -->
    <div class="content-wrapper p-3">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <footer class="main-footer text-center">
        <strong>&copy; <?php echo e(date('Y')); ?> AdminLTE Manual</strong>
    </footer>

</div>

<!-- JS -->
<script src="<?php echo e(asset('adminlte/plugins/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('adminlte/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\praktikum1\resources\views/layouts/master.blade.php ENDPATH**/ ?>