<?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layout.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
        <h1>Ida Natalia Br Sinaga</h1>
            <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?> <!-- yield ini adalah mendeklarasikan yang akan  diisi konten ketika yield  dipanggil
            didalam konten  masing-masing,contoh yield yang diatas men ggunakan value content -->

        </div>
    </main>
</div>



<?php echo $__env->make('admin.layout.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravelhtp\resources\views/admin/layout/appadmin.blade.php ENDPATH**/ ?>