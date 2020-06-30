 <?php $__env->startSection('title','Danh sách môn học'); ?>
<?php $__env->startSection('content'); ?> <?php $__env->startComponent('components.pageTitle'); ?> <?php $__env->slot('title'); ?> Danh sách
môn học <?php $__env->endSlot(); ?> <?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php //Hiển thị danh sách môn học?>

<a href="/monhoc/taomoi"
  ><button class="btn-create mb-4 mr-2">Thêm mới</button></a
>
<!-- <button class="btn-create mb-4">Import</button> -->
<table
  id="DataList"
  class="table table-bordered table-responsive-md table-hover"
>
  <thead>
    <tr>
      <th>STT</th>
      <th>Mã MH</th>
      <th>Tên môn học</th>
      <th>Ngày tạo</th>
      <th>Ngày cập nhật</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php //Vòng lập foreach lấy giá vào bảng?>
    <?php $__currentLoopData = $monhocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $monhoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($loop->index + 1); ?></td>
      <td>MH<?php echo e($monhoc->MaMonHoc); ?></td>
      <td>
        <a
          href="/monhoc/xem/<?php echo e($monhoc->MaMonHoc); ?>"
          ><?php echo e($monhoc->TenMonHoc); ?></a
        >
      </td>
      <td><?php echo e($monhoc->created_at); ?></td>
      <td><?php echo e($monhoc->updated_at); ?></td>
      <td>
        <div class="dropdown">
          <button
            class="btn btn-primary mt-n1 dropdown-toggle"
            type="button"
            id="action-<?php echo e($monhoc->MaMonHoc); ?>"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Thao tác
          </button>
          <div
            class="dropdown-menu"
            aria-labelledby="action-<?php echo e($monhoc->MaMonHoc); ?>"
          >
            <a class="dropdown-item" href="/monhoc/sua/<?php echo e($monhoc->MaMonHoc); ?>"
              >Chỉnh sửa</a
            >
            
          </div>
        </div>
        <div
          class="modal fade"
          id="del<?php echo e($monhoc->MaMonHoc); ?>"
          tabindex="-1"
          role="dialog"
          aria-labelledby="modelTitleId"
          aria-hidden="true"
        >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa Học Sinh</h5>
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
                <p>Bạn có chắc muốn xóa môn</p>
                <p class="text-highlight"><?php echo e($monhoc->TenMonHoc); ?></p>
                <p>khỏi hệ thống?</p>
              </div>
              <div class="modal-footer">
                <a href="/monhoc/xoa/<?php echo e($monhoc->MaMonHoc); ?>"
                  ><button type="button" class="btn btn-confirm mr-2">
                    Xác nhận
                  </button></a
                >
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/monhocs/index.blade.php ENDPATH**/ ?>