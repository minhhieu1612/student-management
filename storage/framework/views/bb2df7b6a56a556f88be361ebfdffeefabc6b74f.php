<?php $__env->startSection('title','Danh sách lớp học'); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.pageTitle'); ?>
 <?php $__env->slot('title'); ?>
      Danh sách lớp học
  <?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<p><a href="/lophoc/create"><button>Xep lop moi</button></a></p>
<p><a href="/lophoc/add"><button>Xep hoc sinh</button></a></p>
<table id="DataList" class="table table-bordered table-responsive-md table-hover" style="width: 100%;">
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