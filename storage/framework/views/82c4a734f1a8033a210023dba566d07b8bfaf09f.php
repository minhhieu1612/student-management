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
      <form action="/baocao/xem" method="POST" class="row">
        <div class="col-md-6">
         <div class="form-group row">
            <label class="label col-md-4" for="HocKy"
              >Học kỳ <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="HocKy"
                id="HocKy"
                value="Chọn khối"
              >
                <option value="1">Học kỳ I</option>
                <option value="2">Học kỳ II</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="MonHoc"
              >Môn học <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="MonHoc"
                id="MonHoc"
                value="Chọn môn"
              >
                <option value="Toán học">Toán học</option>
                <option value="Vật lý">Vật Lý</option>
                <option value="Hóa học">Hóa học</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn">Xem điểm</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="NamHoc"
              >Năm học <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="NamHoc"
                id="NamHoc"
                value="Chọn khối"
              >
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
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
      <button class="btn mb-3"><span><i class="fa fa-download mr-2"></i></span>Export</button>
      <table
        id="DataList"
        class="table table-bordered table-responsive-md table-hover"
      >
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
          <tr>
            <td>1</td>
            <td>LH001</td>
            <td>10</td>
            <td>10A1</td>
            <td>20</td>
            <td>15</td>
            <td>75%</td>
          </tr>
          <tr>
            <td>2</td>
            <td>LH002</td>
            <td>10</td>
            <td>10A2</td>
            <td>20</td>
            <td>16</td>
            <td>80%</td>
          </tr>
          <tr>
            <td>3</td>
            <td>LH003</td>
            <td>10</td>
            <td>10A3</td>
            <td>20</td>
            <td>20</td>
            <td class="text-passed">100%</td>
          </tr>
          <tr>
            <td>4</td>
            <td>LH004</td>
            <td>10</td>
            <td>10A4</td>
            <td>20</td>
            <td>18</td>
            <td>90%</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/baocaos/bySubject.blade.php ENDPATH**/ ?>