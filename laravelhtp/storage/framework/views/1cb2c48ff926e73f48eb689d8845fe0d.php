<?php
$no = 1;
$s1 = ['nama'=>'fawwas','nilai'=>85];
$s2 = ['nama'=>'bedu','nilai'=>90];
$s3 = ['nama'=>'siti','nilai'=>90];
$s4 = ['nama'=>'Ari','nilai'=>70];
$s5 = ['nama'=>'Andi','nilai'=>60];

$judul = ['No', 'Nama','Nilai','Keterangan'];
$siswa = [$s1,$s2,$s3,$s4,$s5];

?>

<table border="1" align="center" cellpadding="10">
    <thead>
        <tr>
            <?php $__currentLoopData = $judul; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jdl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th><?php echo e($jdl); ?></th>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
    </thead>
        <tbody>
            <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php 
            $ket = ($s['nilai'] >= 60) ? 'Lulus' : 'gagal';
            ?>

            <tr>
                <td><?php echo e($no++); ?></td>
                <td><?php echo e($s['nama']); ?></td>
                <td><?php echo e($s['nilai']); ?></td>
                <td><?php echo e($ket); ?></td>

            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
</table><?php /**PATH C:\xampp\htdocs\laravelhtp\resources\views/daftar_nilai.blade.php ENDPATH**/ ?>