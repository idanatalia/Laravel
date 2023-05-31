<?php
$nama = "budi";
$nilai = 60.00;
?>


<!-- struktur kendali if -->
<?php if($nilai >= 60): ?>

<?php $ket = "lulus"; ?>
<?php else: ?>
<?php $ket = "gagal"; ?>
<?php endif; ?>
<p> siswa <?php echo e($nama); ?> dengan nilai <?php echo e($nilai); ?></p>
<h1>dinyatakan <?php echo e($ket); ?></h1><?php /**PATH C:\xampp\htdocs\laravelhtp\resources\views/nilai.blade.php ENDPATH**/ ?>