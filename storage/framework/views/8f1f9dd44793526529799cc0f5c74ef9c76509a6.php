<?php $__env->startSection('title','Hồ sơ học sinh'); ?>
<?php $__env->startSection('content'); ?>

<?php $__env->startComponent('components.pageTitle'); ?>
 <?php $__env->slot('title'); ?>
      Hồ sơ học sinh
  <?php $__env->endSlot(); ?>
<?php if (isset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55)): ?>
<?php $component = $__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55; ?>
<?php unset($__componentOriginal019f52bf54f3f8d29d2774d8872dfcd2ae2cbe55); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<?php //Hiển thị danh sách học sinh?>

<a href="/hosohocsinh/taomoi"><button class="btn-create mb-4">Thêm mới</button></a>
<table id="DataList" class="table table-bordered table-responsive-md table-hover">
  <thead>
    <tr>
      <th>Mã Học Sinh</th>
      <th>Họ và Tên</th>
      <th>Giới Tính</th>
      <th>Ngày Sinh</th>
      <th>Địa Chỉ</th>
      <th>Quê Quán</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php //Vòng lập foreach lấy giá vào bảng?>
    <?php $__currentLoopData = $hocsinhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hocsinh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($hocsinh->MaHocSinh); ?></td>
      <td><a href="/hosohocsinh/xem/<?php echo e($hocsinh->MaHocSinh); ?>"><?php echo e($hocsinh->HoVaTen); ?></a></td>
      <td><?php echo e($hocsinh->GioiTinh ? "Nam" : "Nữ"); ?></td>
      <td><?php echo e($hocsinh->NgaySinh); ?></td>
      <td><?php echo e($hocsinh->DiaChi); ?></td>
      <td>
        <?php echo e($hocsinh->QueQuan); ?></td>
      <td>
        <div class="dropdown">
          <button class="btn btn-primary mt-n1 dropdown-toggle" type="button" id="action-<?php echo e($hocsinh->MaHocSinh); ?>" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
                Thao tác
              </button>
          <div class="dropdown-menu" aria-labelledby="action-<?php echo e($hocsinh->MaHocSinh); ?>">
          <a class="dropdown-item" href="/hosohocsinh/sua/<?php echo e($hocsinh->MaHocSinh); ?>">Chỉnh sửa</a>
          <button class="dropdown-item" data-toggle="modal" data-target="#delStudent<?php echo e($hocsinh->MaHocSinh); ?>">
            Xóa
          </button>
          </div>
        </div>
        <div class="modal fade" id="delStudent<?php echo e($hocsinh->MaHocSinh); ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa Học Sinh</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <p>Bạn có chắc muốn xóa học sinh</p>
                <p class="text-highlight"><?php echo e($hocsinh->HoVaTen); ?></p>
                <p>khỏi hệ thống?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-confirm mr-2">Xác nhận</button>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
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

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/hocsinhs/index.blade.php ENDPATH**/ ?>