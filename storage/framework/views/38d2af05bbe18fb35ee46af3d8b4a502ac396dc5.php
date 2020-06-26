<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php echo $__env->yieldContent('title'); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" type="text/css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link href="<?php echo e(asset('css/dataTables.bootstrap4.min.css')); ?>" type="text/css" rel="stylesheet" />
  
  <link href="<?php echo e(asset('css/app.css')); ?>" type="text/css" rel="stylesheet" />
</head>

<body>
  <?php $__env->startComponent('components.header'); ?>
  <?php if (isset($__componentOriginal18051af5e3d1ed028dc5239cc3437b52a8c6fefa)): ?>
<?php $component = $__componentOriginal18051af5e3d1ed028dc5239cc3437b52a8c6fefa; ?>
<?php unset($__componentOriginal18051af5e3d1ed028dc5239cc3437b52a8c6fefa); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

  <div class="container mb-5 mt-4">
    <?php $__env->startSection('content'); ?>
    <?php echo $__env->yieldSection(); ?>
  </div>

  <?php $__env->startComponent('components.footer'); ?>
  <?php if (isset($__componentOriginal2d1e7c5cf9e06da7dcbfcd38aa098b349a88533b)): ?>
<?php $component = $__componentOriginal2d1e7c5cf9e06da7dcbfcd38aa098b349a88533b; ?>
<?php unset($__componentOriginal2d1e7c5cf9e06da7dcbfcd38aa098b349a88533b); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
  <script type="text/javascript" src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(asset('js/dataTables.bootstrap4.min.js')); ?>"></script>
  
  <script type="text/javascript">
    $(document).ready(function () {
      $("#DataList").DataTable({
        aLengthMenu: [
          [10, 25, 50, 100, -1],
          [10, 25, 50, 100, "Tất cả"]
        ],
        iDisplayLength: 10,
        // "bSort": false,
        targets: "no-sort",
        oLanguage: {
          sLengthMenu: "Hiển thị _MENU_ dòng mỗi trang",
          oPaginate: {
            sFirst:
              "<span class='glyphicon glyphicon-step-backward' aria-hidden='true'></span>",
            sLast:
              "<span class='glyphicon glyphicon-step-forward' aria-hidden='true'></span>",
            sNext:
              '<i class="fa fa-chevron-right"></i>',
            sPrevious:
              '<i class="fa fa-chevron-left"></i>'
          },
          sEmptyTable: "Không có dữ liệu",
          sSearch: "Tìm kiếm",
          sZeroRecords: "Không có dữ liệu",
          sInfo:
            "",
          // "sInfoEmpty" : "Không tìm thấy",
          sInfoFiltered: " (trong tổng số _MAX_ dòng)"
          // "fSort": false,
        }
      });
    });
  </script>
</body>

</html>
<?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/templates/master.blade.php ENDPATH**/ ?>