
<?php $__env->startSection('title','Lop hoc'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-header"><h4>Lop hoc</h4></div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="table-responsive">
            <p><a href="/lophoc/create"><button>Xep lop moi</button></a></p>
            <p><a href="/lophoc/add"><button>Xep hoc sinh</button></a></p>
            <table id="DataList" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Ma Lop Hoc</th>
                        <th>Nam Hoc</th>
                        <th>Khoi</th>
                        <th>Ten Lop</th>
                        <th>Si So</th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $lophocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lophoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="text-align: center; vertical-align: middle;"><?php echo e($lophoc->MaLopHoc); ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo e($lophoc->NamHoc); ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo e($lophoc->Khoi); ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo e($lophoc->TenLop); ?></td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo e($lophoc->SiSo); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\student-management\resources\views/lophocs/index.blade.php ENDPATH**/ ?>