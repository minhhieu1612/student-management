<?php $__env->startSection('title','Thêm mới lớp học'); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.pageTitle'); ?>
<?php $__env->slot('title'); ?> Thêm mới lớp học
<?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <form method="POST" action="/lophoc/taomoi">
    <?php echo csrf_field(); ?>
    <div class="card">
      <div class="card-header">
        Thông tin lớp học
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="TenLop">Tên lớp học <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="TenLop" id="TenLop" value="" placeholder="" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="Khoi">Khối <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <select class="form-control custom-select" name="Khoi" id="Khoi" value="Chọn khối">
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="NamHoc">Năm học <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <select class="form-control custom-select" name="NamHoc" id="NamHoc" value="Chọn khối">
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn-confirm mr-3">Lưu lại</button>
      <a href="/lophoc"><button type="button" class="btn-cancel">Hủy bỏ</button></a>
    </div>
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/lophocs/create.blade.php ENDPATH**/ ?>