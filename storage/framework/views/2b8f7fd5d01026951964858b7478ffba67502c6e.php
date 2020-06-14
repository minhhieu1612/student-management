
<?php $__env->startSection('title','Hồ sơ học sinh'); ?>
<?php $__env->startSection('content'); ?>

    <div class="page-header"><h4>Tạo mới hồ sơ học sinh</h4></div>
    <div>
        <form method="POST" action="/hosohocsinh">
            <?php echo csrf_field(); ?>
            <div class="field">
                <label class="label" for="HoVaTen">Họ Và Tên</label>
                <div class="control">
                    <input
                        class="input"
                        type="text"
                        name="HoVaTen"
                        id="HoVaTen"
                        value="">
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
                        value="">
                </div>
            </div> 
            <div class="field">
                <label class="label" for="GioiTinh">Giới Tính</label>
                <div class="control">
                    <select name="GioiTinh" id="GioiTinh">
                        <option value="1">Nam</option>
                        <option value="0">Nữ</option>
                    </select>
                </div>
            </div> 
            <div class="field">
                <label class="label" for="DiaChi">Địa Chỉ</label>
                <div class="control">
                    <input
                        class="input"
                        type="text"
                        name="DiaChi"
                        id="DiaChi"
                        value="">
                </div>
            </div> 
            <div class="field">
                <label class="label" for="QueQuan">Quê quán</label>
                <div class="control">
                    <input
                        class="input"
                        type="text"
                        name="QueQuan"
                        id="QueQuan"
                        value="">
                </div>
            </div> 
            <div>
                <button type="submit">Tạo Hồ Sơ</button>
            </div>   
        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/hocsinhs/create.blade.php ENDPATH**/ ?>