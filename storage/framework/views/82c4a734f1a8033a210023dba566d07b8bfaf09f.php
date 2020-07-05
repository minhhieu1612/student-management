 <?php $__env->startSection('title','Báo cáo tổng kết theo môn'); ?>
<?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.pageTitle'); ?> <?php $__env->slot('title'); ?> Báo cáo tổng kết theo môn <?php $__env->endSlot(); ?> <?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div>
  <div class="card mt-3">
    <div class="card-header">Thông tin chung</div>
    <div class="card-body">
      <form action="/baocao/theomon" method="POST" class="row">
        <?php echo csrf_field(); ?>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="HocKy">Học kỳ <span class="text-danger">*</span></label>
            <div class="col-md-8">
              <select class="form-control custom-select" name="HocKy" id="HocKy" value="">
                <option value="1">Học kỳ I</option>
                <option value="2">Học kỳ II</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="MonHoc">Môn học <span class="text-danger">*</span></label>
            <div class="col-md-8">
              <select class="form-control custom-select" name="MonHoc" id="MonHoc" value="">
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
            <label class="label col-md-4" for="NamHoc">Năm học <span class="text-danger">*</span></label>
            <div class="col-md-8">
              <select class="form-control custom-select" name="NamHoc" id="NamHoc" value="">
                <?php $__currentLoopData = $namhocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $namhoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($namhoc->NamHoc); ?>"><?php echo e($namhoc->NamHoc); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
      <a href="/baocao/theomon/export/<?php echo e(request('MonHoc') ."/". request('NamHoc') ."/". request('HocKy')); ?>"
        class="btn mb-3"><span><i class="fa fa-download mr-2"></i></span>Export</a>
      <table id="DataList" class="table table-bordered table-responsive-md table-hover">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã LH</th>
            <th>Khối</th>
            <th>Tên lớp học</th>
            <th>Sĩ số</th>
            <th>Số lượng đạt</th>
            <th>Tỷ lệ</th>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $lops ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $lop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($index + 1); ?></td>
            <td><?php echo e($lop->MaLopHoc); ?></td>
            <td><?php echo e($lop->Khoi); ?></td>
            <td><?php echo e($lop->TenLop); ?></td>
            <td><?php echo e($lop->SiSo); ?></td>
            <td><?php echo e($dats[$index]); ?></td>
            <td <?php echo e(($dats[$index] / (($lop->SiSo == 0) ? 1 : $lop->SiSo)) == 1 ? 'class=text-passed':''); ?>>
              <?php echo e($dats[$index] / (($lop->SiSo == 0) ? 1 : $lop->SiSo) * 100); ?>%</td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/baocaos/bySubject.blade.php ENDPATH**/ ?>