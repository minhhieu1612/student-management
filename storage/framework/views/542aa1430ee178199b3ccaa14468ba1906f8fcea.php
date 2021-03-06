<?php $__env->startSection('title','Thêm lớp học'); ?>
<?php $__env->startSection('content'); ?>

<div>
  <div class="page-header">
    <h4>Thêm lớp học</h4>
  </div>
  <form method="POST" action="/lophoc/add">
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

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/lophocs/add.blade.php ENDPATH**/ ?>