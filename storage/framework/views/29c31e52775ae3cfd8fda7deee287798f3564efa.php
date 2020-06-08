
<?php $__env->startSection('title','Hồ sơ học sinh'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-header"><h4>Hồ sơ học sinh</h4></div>

<?php //Hiển thị danh sách học sinh?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="table-responsive">
            <p><a href="/hosohocsinh/create"><button>Thêm mới</button></a>
            </p>
            <p><a href="/hosohocsinh/delete"><button>Xóa</button></a>
            </p>
            <table id="DataList" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Mã Học Sinh</th>
                        <th>Họ và Tên</th>
                        <th>Giới Tính</th>
                        <th>Ngày Sinh</th>
                        <th>Địa Chỉ</th>
                        <th>Quê Quán</th>
                    </tr>
                </thead>
                <tbody>
                <?php //Vòng lập foreach lấy giá vào bảng?>
                <?php $__currentLoopData = $hocsinhs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hocsinh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center; vertical-align: middle;"><?php echo e($hocsinh->MaHocSinh); ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo e($hocsinh->HoVaTen); ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo e($hocsinh->GioiTinh ? "Nam" : "Nữ"); ?></td>
                        <td style="text-align: center; vertical-align: middle; width: 10%;"><?php echo e($hocsinh->NgaySinh); ?></td>
                        <td style="text-align: center; vertical-align: middle; width: 10%;"><?php echo e($hocsinh->DiaChi); ?></td>
                        <td style="text-align: center; vertical-align: middle;">
                            <?php echo e($hocsinh->QueQuan); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\student-management\resources\views/hocsinhs/index.blade.php ENDPATH**/ ?>