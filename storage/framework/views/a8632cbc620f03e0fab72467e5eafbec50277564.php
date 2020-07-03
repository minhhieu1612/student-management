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
          <?php $__currentLoopData = $monhocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monhoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="form-group row">
            <label class="label col-md-4"><?php echo e($monhoc->TenMonHoc); ?></label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk1->where('MaMonHoc', $monhoc->MaMonHoc)->first()->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <div class="row semester">
        <div class="col-md-6">
          <?php $__currentLoopData = $monhocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monhoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="form-group row">
            <label class="label col-md-4"><?php echo e($monhoc->TenMonHoc); ?></label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($diemhk2->where('MaMonHoc', $monhoc->MaMonHoc)->first()->DiemTongHK ?? ''); ?></p>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <div class="row semester">
        <div class="col-md-6">
          <?php $__currentLoopData = $monhocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monhoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="form-group row">
            <label class="label col-md-4"><?php echo e($monhoc->TenMonHoc); ?></label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e((($diemhk1->where('MaMonHoc', $monhoc->MaMonHoc)->first()->DiemTongHK ?? 0.0) + ($diemhk2->where('MaMonHoc', $monhoc->MaMonHoc)->first()->DiemTongHK ?? 0.0)) / 2); ?></p>
            </div>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    <a href="/hosohocsinh/sua/<?php echo e($hocsinh->MaHocSinh); ?>"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\student-management\resources\views/hocsinhs/detail.blade.php ENDPATH**/ ?>