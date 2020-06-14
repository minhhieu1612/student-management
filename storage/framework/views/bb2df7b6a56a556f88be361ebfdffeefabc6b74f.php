<?php $__env->startSection('title','Lop hoc'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-header">
  <h4>Lop hoc</h4>
</div>

<p><a href="/lophoc/create"><button>Xep lop moi</button></a></p>
<p><a href="/lophoc/add"><button>Xep hoc sinh</button></a></p>
<table id="DataList" class="table table-bordered table-hover table-responsive" style="width: 100%;">
  <thead>
    <tr>
      <th>Ma Lop Hoc</th>
      <th>Nam Hoc</th>
      <th>Khoi</th>
      <th>Ten Lop</th>
      <th>Si So</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $lophocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lophoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($lophoc->MaLopHoc); ?></td>
      <td><?php echo e($lophoc->NamHoc); ?></td>
      <td><?php echo e($lophoc->Khoi); ?></td>
      <td><?php echo e($lophoc->TenLop); ?></td>
      <td><?php echo e($lophoc->SiSo); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/lophocs/index.blade.php ENDPATH**/ ?>