 <?php $__env->startSection('title','Thông tin học sinh'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.pageTitle'); ?>
<?php $__env->slot('title'); ?> Thông tin học sinh
<?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <div class="card">
    <div class="card-header">
      Thông tin học sinh
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Mã học sinh</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($hocsinh->MaHocSinh); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Họ Và Tên</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($hocsinh->HoVaTen); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày Sinh</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($hocsinh->NgaySinh); ?></p>
            </div>
          </div>
          <div class="form-group row p-relative">
            <label class="label col-md-4">Giới Tính</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($hocsinh->GioiTinh ? "Nam" : "Nữ"); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Địa Chỉ</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($hocsinh->DiaChi); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Quê quán</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($hocsinh->QueQuan); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày tạo</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($hocsinh->created_at ? $hocsinh->created_at->format('d/m/Y H:i'):''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày cập nhật</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($hocsinh->updated_at ? $hocsinh->updated_at->format('d/m/Y H:i'):''); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin lớp học</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Tên lớp học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($lop->TenLop ?? ""); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Khối</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($lop->Khoi ?? ""); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Năm học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($lop->NamHoc ?? ""); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header d-flex">
      Thông tin điểm tổng kết môn học
      <button class="btn fs-14 ml-auto mr-1 trigger-semester active">
        Học kì I
      </button>
      <button class="btn fs-14 mr-1 trigger-semester">Học kì II</button>
      <button class="btn fs-14 trigger-semester">Cả năm</button>
    </div>
    <div class="card-body">
      <div class="row semester d-flex">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Toán học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[0]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngữ Văn</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[1]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Anh Văn</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[2]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Vật Lý</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[3]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Hóa Học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[4]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Sinh học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[5]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Lịch Sử</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[6]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Địa Lý</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[7]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Giáo Dục Công Dân</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[8]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Thể Dục</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1[9]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row semester">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Toán học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[0]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngữ Văn</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[1]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Anh Văn</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[2]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Vật Lý</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[3]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Hóa Học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[4]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Sinh học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[5]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Lịch Sử</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[6]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Địa Lý</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[7]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Giáo Dục Công Dân</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[8]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Thể Dục</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2[9]->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="row semester">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Toán học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[0]->DiemTongHK ?? 0.0) + ($diemhk2[0]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngữ Văn</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[1]->DiemTongHK ?? 0.0) + ($diemhk2[1]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Anh Văn</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[2]->DiemTongHK ?? 0.0) + ($diemhk2[2]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Vật Lý</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[3]->DiemTongHK ?? 0.0) + ($diemhk2[3]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Hóa Học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[4]->DiemTongHK ?? 0.0) + ($diemhk2[4]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Sinh học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[5]->DiemTongHK ?? 0.0) + ($diemhk2[5]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Lịch Sử</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[6]->DiemTongHK ?? 0.0) + ($diemhk2[6]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Địa Lý</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[7]->DiemTongHK ?? 0.0) + ($diemhk2[7]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Giáo Dục Công Dân</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[8]->DiemTongHK ?? 0.0) + ($diemhk2[8]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Thể Dục</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1[9]->DiemTongHK ?? 0.0) + ($diemhk2[9]->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin lớp học</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Học kì I</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($tbhk1); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Học kì II</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($tbhk2); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">cả năm</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e(($tbhk1 + $tbhk2) / 2); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/hosohocsinh/sua/1"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/hocsinhs/detail.blade.php ENDPATH**/ ?>