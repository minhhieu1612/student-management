 <?php $__env->startSection('title','Quản lý điểm số'); ?>
<?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.pageTitle'); ?> <?php $__env->slot('title'); ?> Quản lý
điểm số <?php $__env->endSlot(); ?> <?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<form action="/diem/sua/<?php echo e($form[0]); ?>/<?php echo e($form[1]); ?>/<?php echo e($form[2]); ?>/<?php echo e($form[3]); ?>" method="POST">
  <?php echo csrf_field(); ?>
  <?php echo method_field('PUT'); ?>
  <div class="card mt-3">
    <div class="card-header">Thông tin chung</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Tên lớp học</label>
            <div class="col-md-8">
              <?php echo e($form[0]); ?>

            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Môn học</label>
            <div class="col-md-8">
              <?php echo e($tenmonhoc); ?>

            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Năm học</label>
            <div class="col-md-8">
              <?php echo e($form[2]); ?>

            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Học kỳ</label>
            <div class="col-md-8">
              Học kỳ <?php echo e($form[3]); ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin điểm học sinh</div>
    <div class="card-body">
      <h4 class="text-center"><?php echo e($form[0]); ?></h4>
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
            <td>
              <input
                class="form-control w-100 text-center"
                type="number"
                name="mieng<?php echo e($hocsinh->MaHocSinh); ?>"
                max="10"
                min="0"
                step="0.1"
                value="<?php echo e(App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->DiemMieng ?? 0.0); ?>"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="number"
                name="15p<?php echo e($hocsinh->MaHocSinh); ?>"
                max="10"
                min="0"
                step="0.1"
                value="<?php echo e(App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->Diem15P ?? 0.0); ?>"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="number"
                name="1tiet<?php echo e($hocsinh->MaHocSinh); ?>"
                max="10"
                min="0"
                step="0.1"
                value="<?php echo e(App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->Diem1Tiet ?? 0.0); ?>"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="number"
                name="hocky<?php echo e($hocsinh->MaHocSinh); ?>"
                max="10"
                min="0"
                step="0.1"
                value="<?php echo e(App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->DiemHK ?? 0.0); ?>"
              />
            </td>
            <td><?php echo e(App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->DiemTongHK ?? 0.0); ?></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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