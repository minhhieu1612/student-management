 <?php $__env->startSection('title','Quản lý điểm số'); ?>
<?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.pageTitle'); ?> <?php $__env->slot('title'); ?> Quản lý
điểm số <?php $__env->endSlot(); ?> <?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <div class="card mt-3">
    <div class="card-header">Thông tin chung</div>
    <div class="card-body">
      <form action="/diem/xem" method="POST" class="row">
        <?php echo csrf_field(); ?>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="TenLopHoc"
              >Tên lớp học <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="TenLop"
                id="TenLop"
                value=""
              >
                <?php $__currentLoopData = $lops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($lop->TenLop); ?>"><?php echo e($lop->TenLop); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="MonHoc"
              >Môn học <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="MonHoc"
                id="MonHoc"
                value=""
              >
                <?php $__currentLoopData = $monhocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monhoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($monhoc->MaMonHoc); ?>"><?php echo e($monhoc->TenMonHoc); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn">Xem điểm</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="NamHoc"
              >Năm học <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="NamHoc"
                id="NamHoc"
                value=""
              >
                <?php $__currentLoopData = $namhocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $namhoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($namhoc->NamHoc); ?>"><?php echo e($namhoc->NamHoc); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="HocKy"
              >Học kỳ <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="HocKy"
                id="HocKy"
                value=""
              >
                <option value="1">Học kỳ I</option>
                <option value="2">Học kỳ II</option>
              </select>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin điểm học sinh</div>
    <div class="card-body">
      <button class="btn mb-3"><span><i class="fa fa-download mr-2"></i></span>Export</button>
      <h4 class="text-center"><?php echo e(request('TenLop')); ?></h4>
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
          <?php $__currentLoopData = $hocsinhs ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hocsinh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($loop->index + 1); ?></td>
            <td><?php echo e($hocsinh->MaHocSinh); ?></td>
            <td><?php echo e($hocsinh->HoVaTen); ?></td>
            <td><?php echo e($hocsinh->DiemMieng); ?></td>
            <td><?php echo e($hocsinh->Diem15P); ?></td>
            <td><?php echo e($hocsinh->Diem1Tiet); ?></td>
            <td><?php echo e($hocsinh->DiemHK); ?></td>
            <td><?php echo e($hocsinh->DiemTongHK); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/diem/sua"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\student-management\resources\views/diemmons/index.blade.php ENDPATH**/ ?>