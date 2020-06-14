
<?php $__env->startSection('title','###'); ?>
<?php $__env->startSection('content'); ?>

<div class="page-header"><h4>###</h4></div>
<div>
    <form method="POST" action="/lophoc/create">
        <?php echo csrf_field(); ?>
        <div class="field">
            <label class="label" for="NamHoc">Nam Hoc</label>
            <div class="control">
                <input
                    class="input"
                    type="number"
                    name="NamHoc"
                    id="NamHoc"
                    value="" required>
            </div>
        </div>
        <div class="field">
            <label class="label" for="Khoi">Khoi</label>
            <div class="control">
                <input
                    class="input"
                    type="number"
                    name="Khoi"
                    id="Khoi"
                    value="" required>
            </div>
        </div> 
        <div class="field">
            <label class="label" for="TenLop">Ten Lop</label>
            <div class="control">
                <input 
                    class="input"
                    type="text"
                    name="TenLop"
                    id="TenLop"
                    value="" required>
            </div>
        </div> 
        <div class="field">
            <label class="label" for="MaHocSinh">Ma Hoc Sinh</label>
            <div class="control">
                <input
                    class="input"
                    type="textarea"
                    name="MaHocSinh"
                    id="MaHocSinh"
                    value="" required>
            </div>
        </div>
        <div>
            <button type="submit">Xep lop</button>
        </div>   
    </form>
</div>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/lophocs/create.blade.php ENDPATH**/ ?>