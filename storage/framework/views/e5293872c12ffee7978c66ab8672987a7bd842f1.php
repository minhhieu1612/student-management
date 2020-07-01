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
              <p class="fs-14">LH<?php echo e($lophoc->MaLopHoc); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Tên lớp học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($lophoc->TenLop); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Khối</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($lophoc->Khoi); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Năm học</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($lophoc->NamHoc); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày tạo</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($lophoc->created_at ? $lophoc->created_at->format('d/m/Y H:i'):''); ?></p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày cập nhật</label>
            <div class="col-md-8">
              <p class="fs-14"><?php echo e($lophoc->updated_at ? $lophoc->updated_at->format('d/m/Y H:i'):''); ?></p>
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
        <button class="btn-create mr-2" data-toggle="modal" data-target="#addStudent">Thêm học sinh</button>
        <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
          aria-hidden="true">
          <div class="modal-dialog" role="document" style="max-width: 80%;">
            <form method="POST" action="/lophoc/xem/<?php echo e($lophoc->MaLopHoc); ?>/themhocsinh" class="modal-content">
              <?php echo csrf_field(); ?>
              <?php echo method_field('POST'); ?>
              <div class="modal-header">
                <h5 class="modal-title">Thêm học sinh vào lớp học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <table id="DataList" class="table table-bordered table-responsive-md table-hover">
                  <thead>
                    <tr>
                      <th></th>
                      <th>STT</th>
                      <th>Mã Học Sinh</th>
                      <th>Họ và Tên</th>
                      <th>Giới Tính</th>
                      <th>Ngày Sinh</th>
                      <th>Địa Chỉ</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $hocsinhschuaxeplop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <input class="d-none" type="text" name="SoHocSinhChuaXepLop" value="<?php echo e($loop->count); ?>">
                    <tr>
                      <td><input type="checkbox" style="width:1em; height:1em; cursor: pointer;" name="MaHocSinh<?php echo e($loop->index); ?>" value="<?php echo e($hs->MaHocSinh); ?>"></td>
                      <td><?php echo e($loop->index + 1); ?></td>
                      <td>HS<?php echo e($hs->MaHocSinh); ?></td>
                      <td><?php echo e($hs->HoVaTen); ?></td>
                      <td><?php echo e($hs->GioiTinh ? "Nam" : "Nữ"); ?></td>
                      <td><?php echo e($hs->NgaySinh); ?></td>
                      <td><?php echo e($hs->DiaChi); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-confirm mr-2">
                  Xác nhận
                </button>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">
                  Hủy
                </button>
              </div>
            </form>
          </div>
        </div>
        <button class="btn" data-toggle="modal" data-target="#delAllStudent">
          <i class="fa fa-close mr-1"></i>Xóa tất cả
        </button>
        <div class="modal fade" id="delAllStudent" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form method="GET" action="/lophoc/xem/<?php echo e($lophoc->MaLopHoc); ?>/xoahocsinh" class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa học sinh ra khỏi lớp học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                <button type="submit" class="btn btn-confirm mr-2">
                  Xác nhận
                </button>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">
                  Hủy
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <table id="DataList" class="table table-bordered table-responsive-md table-hover">
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
          <?php $__currentLoopData = $hocsinhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
          <td><?php echo e($loop->index + 1); ?></td>
          <td>HS<?php echo e($hs->MaHocSinh); ?></td>
            <td>
              <a href="/hosohocsinh/xem/<?php echo e($hs->MaHocSinh); ?>"><?php echo e($hs->HoVaTen); ?></a>
            </td>
            <td><?php echo e($hs->GioiTinh ? "Nam" : "Nữ"); ?></td>
            <td><?php echo e($hs->NgaySinh); ?></td>
            <td><?php echo e($hs->DiaChi); ?></td>
            <td>
              <button class="btn mt-n1" data-toggle="modal" data-target="#delStudent">
                Xóa
              </button>
              <div class="modal fade" id="delStudent" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <form method="GET" action="/lophoc/xem/<?php echo e($lophoc->MaLopHoc); ?>/xoahocsinh/<?php echo e($hs->MaHocSinh); ?>" class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Xóa học sinh ra khỏi lớp học</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                      <button type="submit" class="btn btn-confirm mr-2">
                        Xác nhận
                      </button>
                      <button type="button" class="btn btn-cancel" data-dismiss="modal">
                        Hủy
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/lophoc/sua/<?php echo e($lophoc->MaLopHoc); ?>"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/lophocs/detail.blade.php ENDPATH**/ ?>