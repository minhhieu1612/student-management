 <?php $__env->startSection('title','Thông tin lớp học'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.pageTitle'); ?>
  <?php $__env->slot('title'); ?> Thông tin lớp học
  <?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <div class="card mt-3">
    <div class="card-header">Thông tin lớp học</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Mã lớp học</label>
            <div class="col-md-8">
              <p class="fs-14">LH111</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Tên lớp học</label>
            <div class="col-md-8">
              <p class="fs-14">10A2</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Khối</label>
            <div class="col-md-8">
              <p class="fs-14">10</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Năm học</label>
            <div class="col-md-8">
              <p class="fs-14">2020</p>
            </div>
          </div>
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
  <div class="card mt-3">
    <div class="card-header">Thông tin học sinh</div>
    <div class="card-body">
      <div class="mb-4">
        <button class="btn-create mr-2">Thêm học sinh</button>
        <button class="btn" data-toggle="modal" data-target="#delAllStudent">
          <i class="fa fa-close mr-1"></i>Xóa tất cả
        </button>
        <div
          class="modal fade"
          id="delAllStudent"
          tabindex="-1"
          role="dialog"
          aria-labelledby="modelTitleId"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa học sinh ra khỏi lớp học</h5>
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body text-center">
                <p>
                  Bạn có chắc muốn xóa toàn bộ học sinh trong lớp
                </p>
                <p class="text-highlight">10A1</p>
                <p>khỏi lớp học?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-confirm mr-2">
                  Xác nhận
                </button>
                <button
                  type="button"
                  class="btn btn-cancel"
                  data-dismiss="modal"
                >
                  Hủy
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <table
        id="DataList"
        class="table table-bordered table-responsive-md table-hover"
      >
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã Học Sinh</th>
            <th>Họ và Tên</th>
            <th>Giới Tính</th>
            <th>Ngày Sinh</th>
            <th>Địa Chỉ</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>HS001</td>
            <td>
              <a href="/hosohocsinh/xem">Đặng Quan Hồng</a>
            </td>
            <td>Nam</td>
            <td>30/04/2004</td>
            <td>137 Nguyễn Thị Minh Khai, Quận 1, TP Hồ Chí Minh</td>
            <td>
              <button
                class="btn mt-n1"
                data-toggle="modal"
                data-target="#delStudent"
              >
                Xóa
              </button>
              <div
                class="modal fade"
                id="delStudent"
                tabindex="-1"
                role="dialog"
                aria-labelledby="modelTitleId"
                aria-hidden="true"
              >
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Xóa học sinh ra khỏi lớp học</h5>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p>
                        Bạn có chắc muốn xóa học sinh
                      </p>
                      <p class="text-highlight">Đặng Quan Hồng</p>
                      <p>khỏi lớp học?</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-confirm mr-2">
                        Xác nhận
                      </button>
                      <button
                        type="button"
                        class="btn btn-cancel"
                        data-dismiss="modal"
                      >
                        Hủy
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/lophoc/sua/1"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/lophocs/detail.blade.php ENDPATH**/ ?>