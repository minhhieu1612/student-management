
<?php $__env->startSection('title','Hồ sơ học sinh'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-header"><h4>Chỉnh sửa hồ sơ học sinh</h4></div>
<div>
    <form method="POST" action="/hosohocsinh/<?php echo e($hocsinh->MaHocSinh); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="field">
            <label class="label" for="HoVaTen">Họ Và Tên</label>
            <div class="control">
                <input
                    class="input"
                    type="text"
                    name="HoVaTen"
                    id="HoVaTen"
                    value="<?php echo e($hocsinh->HoVaTen); ?>">
            </div>
        </div>
        <div class="field">
            <label class="label" for="NgaySinh">Ngày Sinh</label>
            <div class="control">
                <input
                    class="input"
                    type="date"
                    name="NgaySinh"
                    id="NgaySinh"
                    value="<?php echo e($hocsinh->NgaySinh); ?>">
            </div>
        </div> 
        <div class="field">
            <label class="label" for="GioiTinh">Giới Tính</label>
            <div class="control">
                <select name="GioiTinh" id="GioiTinh">
                    <option value="<?php echo e($hocsinh->GioiTinh); ?>"><?php echo e($hocsinh->GioiTinh ? 'Nam' : 'Nữ'); ?></option>
                    <option value="<?php echo e(!$hocsinh->GioiTinh); ?>"><?php echo e($hocsinh->GioiTinh ? 'Nữ' : 'Nam'); ?></option>
                </select>
            </div>
        </div> 
        <div class="field">
            <label class="label" for="DiaChi">Địa Chỉ</label>
            <div class="control">
                <textarea
                    class="textarea"
                    name="DiaChi"
                    id="DiaChi"><?php echo e($hocsinh->DiaChi); ?></textarea>
            </div>
        </div> 
        <div class="field">
            <label class="label" for="QueQuan">Quê quán</label>
            <div class="control">
                <textarea
                    class="textarea"
                    name="QueQuan"
                    id="QueQuan"><?php echo e($hocsinh->QueQuan); ?></textarea>
            </div>
        </div> 
        <div>
            <button type="submit">Sửa Hồ Sơ</button>
            <a href="/hosohocsinh"><button>Hủy</button></a>
        </div>   
    </form>
</div>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\quanlyhocsinh\resources\views/hocsinhs/edit.blade.php ENDPATH**/ ?>