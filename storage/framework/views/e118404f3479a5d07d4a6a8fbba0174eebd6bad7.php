<table>
    <tr>
        <td>Học kỳ: <?php echo e($hocky); ?></td>
        <td></td>
        <td>Năm học: <?php echo e($namhoc); ?></td>
    </tr>
    <tr>
        <td>Môn học: <?php echo e($tenmonhoc); ?></td>
    </tr>
    <tr></tr>
    <thead>
    <tr>
        <th>STT</th>
        <th>Mã LH</th>
        <th>Khối</th>
        <th>Tên lớp học</th>
        <th>Sĩ số</th>
        <th>Số lượng đạt</th>
        <th>Tỷ lệ</th>
    </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $lops ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $lop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($index + 1); ?></td>
            <td><?php echo e($lop->MaLopHoc); ?></td>
            <td><?php echo e($lop->Khoi); ?></td>
            <td><?php echo e($lop->TenLop); ?></td>
            <td><?php echo e($lop->SiSo); ?></td>
            <td><?php echo e($dats[$index]); ?></td>
            <td><?php echo e($dats[$index] / (($lop->SiSo == 0) ? 1 : $lop->SiSo) * 100); ?>%</td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH D:\xampp\htdocs\student-management\resources\views/baocaos/exportBySubject.blade.php ENDPATH**/ ?>