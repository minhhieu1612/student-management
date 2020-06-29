 <?php $__env->startSection('title','Cấu hình tham số'); ?>
<?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.pageTitle'); ?> <?php $__env->slot('title'); ?> Cấu hình
tham số <?php $__env->endSlot(); ?> <?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <form method="POST" action="/cauhinh/sua">
    <?php echo csrf_field(); ?>
    <div class="card">
      <div class="card-header">
        Thông tin tham số
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="TuoiToiThieu"
                >Tuổi tối thiểu <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="TuoiToiThieu"
                  id="TuoiToiThieu"
                  value=""
                  placeholder=""
                  required
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="SoLopToiDa"
                >Số lớp tối đa <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="SoLopToiDa"
                  id="SoLopToiDa"
                  value=""
                  placeholder=""
                  required
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="SiSoToiDa"
                >Sĩ số tối đa <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="SiSoToiDa"
                  id="SiSoToiDa"
                  value=""
                  placeholder=""
                  required
                />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="DiemToiThieu"
                >Điểm tối thiểu <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="DiemToiThieu"
                  id="DiemToiThieu"
                  value=""
                  placeholder=""
                  required
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="DiemToiDa"
                >Điểm tối đa <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="DiemToiDa"
                  id="DiemToiDa"
                  value=""
                  placeholder=""
                  required
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="DiemDat"
                >Điểm đạt <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="DiemDat"
                  id="DiemDat"
                  value=""
                  placeholder=""
                  required
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn-confirm mr-3">Lưu lại</button>
      <a href="/cauhinh"><button type="button" class="btn-cancel">Hủy bỏ</button></a>
    </div>
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/cauhinhs/edit.blade.php ENDPATH**/ ?>