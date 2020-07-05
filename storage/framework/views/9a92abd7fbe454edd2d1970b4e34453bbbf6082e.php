 <?php $__env->startSection('title','Cấu hình tham số'); ?>
<?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.pageTitle'); ?> <?php $__env->slot('title'); ?> Cấu hình
tham số <?php $__env->endSlot(); ?> <?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <div class="card">
    <div class="card-header">
      Thông tin tham số
    </div>
    <div class="card-body">
      <?php $__currentLoopData = $cauhinhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cauhinh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($loop->index == 0): ?>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="TuoiToiThieu">Tuổi tối thiểu <span class="text-danger">*</span></label>
          <div class="col-md-8"><?php echo e($cauhinh->TuoiToiThieu); ?></div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="SoLopToiDa">Số lớp tối đa <span class="text-danger">*</span></label>
            <div class="col-md-8"><?php echo e($cauhinh->SoLopToiDa); ?></div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="SiSoToiDa">Sĩ số tối đa <span class="text-danger">*</span></label>
            <div class="col-md-8"><?php echo e($cauhinh->SiSoToiDa); ?></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="DiemToiThieu">Điểm tối thiểu <span class="text-danger">*</span></label>
            <div class="col-md-8"><?php echo e($cauhinh->DiemToiThieu); ?></div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="DiemToiDa">Điểm tối đa <span class="text-danger">*</span></label>
            <div class="col-md-8"><?php echo e($cauhinh->DiemToiDa); ?></div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="DiemDat">Điểm đạt <span class="text-danger">*</span></label>
            <div class="col-md-8"><?php echo e($cauhinh->DiemDat); ?></div>
          </div>
        </div>
      </div>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/cauhinh/sua"><button type="submit" class="btn-confirm">Sửa</button></a>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\student-management\resources\views/cauhinhs/index.blade.php ENDPATH**/ ?>