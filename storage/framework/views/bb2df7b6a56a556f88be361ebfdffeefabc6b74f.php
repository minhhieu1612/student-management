 <?php $__env->startSection('title','Danh sách lớp học'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.pageTitle'); ?>
<?php $__env->slot('title'); ?> Danh sách lớp học
<?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="mb-4">
  <a href="/lophoc/taomoi"><button class="btn-create mr-2">Thêm mới</button></a>

</div>

<table id="DataList" class="table table-bordered table-responsive-md table-hover" style="width: 100%;">
  <thead>
    <tr>
      <th>STT</th>
      <th>Ma LH</>
      <th>Khoi</th>
      <th>Ten lớp học</th>
      <th>Nam Hoc</th>
      <th>Sĩ Số</th>
      <th>Ngày tạo</th>
      <th>Ngày cập nhật</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $lophocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lophoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($loop->index + 1); ?></td>
      <td>LH<?php echo e($lophoc->MaLopHoc); ?></td>
      <td><?php echo e($lophoc->Khoi); ?></td>
      <td><a href="/lophoc/xem"><?php echo e($lophoc->TenLop); ?></a></td>
      <td><?php echo e($lophoc->NamHoc); ?></td>
      <td><?php echo e($lophoc->SiSo); ?></td>
      <td><?php echo e($lophoc->created_at); ?></td>
      <td><?php echo e($lophoc->updated_at); ?></td>
      <td>
        <div class="dropdown">
          <button class="btn btn-primary mt-n1 dropdown-toggle" type="button" id="action-<?php echo e($lophoc->MaLopHoc); ?>"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Thao tác
          </button>
          <div class="dropdown-menu" aria-labelledby="action-<?php echo e($lophoc->MaLopHoc); ?>">
            <a class="dropdown-item" href="/lophoc/sua/<?php echo e($lophoc->MaLopHoc); ?>">Chỉnh sửa</a>
            <button class="dropdown-item" data-toggle="modal" data-target="#delStudent<?php echo e($lophoc->MaLopHoc); ?>">
              Xóa
            </button>
          </div>
        </div>
        <div class="modal fade" id="delStudent<?php echo e($lophoc->MaLopHoc); ?>" tabindex="-1" role="dialog"
          aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form action="/lophoc/xoa/<?php echo e($lophoc->MaLopHoc); ?>" method="GET" class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa Lớp học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Bạn có chắc muốn xóa lớp</p>
                <p class="text-highlight"><?php echo e($lophoc->TenLop); ?></p>
                <p>khỏi hệ thống?</p>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-confirm mr-2">Xác nhận</button>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
              </div>
            </form>
          </div>
        </div>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/lophocs/index.blade.php ENDPATH**/ ?>