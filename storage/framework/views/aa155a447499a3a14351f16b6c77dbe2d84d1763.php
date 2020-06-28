 <?php $__env->startSection('title','Thông tin môn học'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.pageTitle'); ?>
  <?php $__env->slot('title'); ?> Thông tin môn học
  <?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <div class="card mt-3">
    <div class="card-header">Thông tin môn học</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Mã môn học</label>
            <div class="col-md-8">
              <p class="fs-14">MH111</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Tên môn học</label>
            <div class="col-md-8">
              <p class="fs-14">Anh Văn</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Ngày tạo</label>
            <div class="col-md-8">
              <p class="fs-14">30/12/2019 9:00</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày cập nhật</label>
            <div class="col-md-8">
              <p class="fs-14">12/02/2020 15:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/lophoc/sua/1"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/monhocs/detail.blade.php ENDPATH**/ ?>