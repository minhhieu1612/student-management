 <?php $__env->startSection('title','Thêm mới học sinh'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.pageTitle'); ?>
  <?php $__env->slot('title'); ?> Thêm mới học sinh
  <?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <form method="POST" action="/hosohocsinh">
    <?php echo csrf_field(); ?>
    <div class="card">
      <div class="card-header">
        Thông tin học sinh
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="HoVaTen"
                >Họ Và Tên <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="HoVaTen"
                  id="HoVaTen"
                  value=""
                  placeholder=""
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="NgaySinh"
                >Ngày Sinh <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="date"
                  name="NgaySinh"
                  id="NgaySinh"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="GioiTinh"
                >Giới Tính <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <select class="form-control custom-select" name="GioiTinh" id="GioiTinh">
                  <option value="1">Nam</option>
                  <option value="0">Nữ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="DiaChi"
                >Địa Chỉ <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="DiaChi"
                  id="DiaChi"
                  value=""
                />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="QueQuan">Quê quán</label>
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="QueQuan"
                  id="QueQuan"
                  value=""
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mt-3">
      <div class="card-header">Thông tin lớp học</div>
      <div class="card-body">
        <div class="form-group row">
          <label class="label col-md-3" for="MaLopHoc"
            >Mã lớp học</label
          >
          <div class="col-md-4">
            <input
              class="form-control"
              type="text"
              name="MaLopHoc"
              id="MaLopHoc"
              value=""
              placeholder=""
            />
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn-confirm mr-3">Lưu lại</button>
      <button type="button" class="btn-cancel">Hủy bỏ</button>
    </div>
  </form>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/hocsinhs/create.blade.php ENDPATH**/ ?>