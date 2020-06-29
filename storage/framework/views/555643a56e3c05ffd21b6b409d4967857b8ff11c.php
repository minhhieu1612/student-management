 <?php $__env->startSection('title','Quản lý điểm số'); ?>
<?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.pageTitle'); ?> <?php $__env->slot('title'); ?> Quản lý
điểm số <?php $__env->endSlot(); ?> <?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<form action="/diem/sua" method="POST">
  <div class="card mt-3">
    <div class="card-header">Thông tin chung</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Tên lớp học</label>
            <div class="col-md-8">
              10A1
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Môn học</label>
            <div class="col-md-8">
              Toán học
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Năm học</label>
            <div class="col-md-8">
              2020
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Học kỳ</label>
            <div class="col-md-8">
              Học kỳ I
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin điểm học sinh</div>
    <div class="card-body">
      <h4 class="text-center">Lớp 10A1</h4>
      <table
        id="DataList"
        class="table table-bordered table-responsive-md table-hover"
      >
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã Học Sinh</th>
            <th>Họ và Tên</th>
            <th>Điểm miệng</th>
            <th>Điểm 15p</th>
            <th>Điểm 1 tiết</th>
            <th>Điểm học kỳ</th>
            <th>Điểm tổng kết</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>HS001</td>
            <td>Đặng Quan Hồng</td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="text"
                name="miengHS001"
                max="10"
                min="0"
                value="7"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="text"
                name="15pHS001"
                max="10"
                min="0"
                value="6.5"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="text"
                name="1tietHS001"
                max="10"
                min="0"
                value="8.5"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="text"
                name="hockyHS001"
                max="10"
                min="0"
                value="8"
              />
            </td>
            <td>7.6</td>
          </tr>
          <tr>
            <td>2</td>
            <td>HS002</td>
            <td>Đặng Thùy Nhi</td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="text"
                name="miengHS002"
                max="10"
                min="0"
                value="8"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="text"
                name="15pHS002"
                max="10"
                min="0"
                value="7.5"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="text"
                name="1tietHS002"
                max="10"
                min="0"
                value="8.5"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="text"
                name="hockyHS002"
                max="10"
                min="0"
                value="9"
              />
            </td>
            <td>8.9</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="text-center mt-5">
    <button type="submit" class="btn-confirm mr-3">Lưu</button>
    <a href="/diem"><button type="button" class="btn-cancel">Hủy bỏ</button></a>
  </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/diemmons/edit.blade.php ENDPATH**/ ?>