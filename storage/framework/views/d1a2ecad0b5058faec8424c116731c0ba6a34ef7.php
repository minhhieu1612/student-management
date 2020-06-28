 <?php $__env->startSection('title','Thêm mới môn học'); ?>
<?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.pageTitle'); ?> <?php $__env->slot('title'); ?> Thêm mới
môn học <?php $__env->endSlot(); ?> <?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <form method="POST" action="/monhoc/taomoi">
    <?php echo csrf_field(); ?>
    <div class="card">
      <div class="card-header">
        Thông tin môn học
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="form-group row">
              <label class="label col-md-4" for="TenMonHoc"
                >Tên môn học <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="TenMonHoc"
                  id="TenMonHoc"
                  value=""
                  placeholder=""
                />
              </div>
            </div>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 pt-5">
      <button type="submit" class="btn-confirm mr-3">Lưu lại</button>
      <button type="button" class="btn-cancel">Hủy bỏ</button>
    </div>
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/monhocs/create.blade.php ENDPATH**/ ?>