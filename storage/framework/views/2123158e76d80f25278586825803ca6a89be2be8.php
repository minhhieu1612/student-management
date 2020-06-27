
<?php $__env->startSection('title','Thêm mới lớp học'); ?>
<?php $__env->startSection('content'); ?>


<?php $__env->startComponent('components.pageTitle'); ?>
 <?php $__env->slot('title'); ?>
      Thêm mới lớp học
  <?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <div class="page-header">
    <h4>Thêm lớp học</h4>
  </div>
  <form method="POST" action="/lophoc/them">
    <?php echo csrf_field(); ?>
    <div class="field">
      <label class="label" for="MaLopHoc">Ma Lop Hoc</label>
      <div class="control">
        <input class="input" type="number" name="MaLopHoc" id="MaLopHoc" value="">
      </div>
    </div>
    <div class="field">
      <label class="label" for="MaHocSinh">Ma Hoc Sinh</label>
      <div class="control">
        <input class="input" type="textarea" name="MaHocSinh" id="MaHocSinh" value="">
      </div>
      <div>
        <button type="submit">Xep hoc sinh</button>
      </div>
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\student-management\resources\views/lophocs/add.blade.php ENDPATH**/ ?>