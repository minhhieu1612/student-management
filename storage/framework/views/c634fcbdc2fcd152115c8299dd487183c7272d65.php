
<?php $__env->startSection('title','Hồ sơ học sinh'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-header">
  <h4>Xóa hồ sơ học sinh</h4>
</div>
<div>
  <form method="POST" action="/hosohocsinh/delete">
    <?php echo csrf_field(); ?>
    <div class="field">
      <label class="label" for="MaHocSinh">Mã Học Sinh</label>
      <input type="text" name="MaHocSinh">
    </div>
    <div>
      <button type="submit">Xóa</button>
    </div>
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/hocsinhs/delete.blade.php ENDPATH**/ ?>