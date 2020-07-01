<nav class="navbar navbar-expand-lg navbar-light bg-linear header">
  <a class="navbar-brand text-white" href="/">Quản lý học sinh</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle menu">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto ml-lg-2 d-flex w-100">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="/hocsinh" id="hocsinhDropdownId" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Học sinh</a>
        <div class="dropdown-menu header-dropdown-menu" aria-labelledby="hosohocsinhDropdownId">
          <a class="dropdown-item header-dropdown-item" href="/hosohocsinh/taomoi">Thêm mới</a>
          <a class="dropdown-item header-dropdown-item" href="/hosohocsinh">Danh sách học sinh</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="/lophoc" id="lophocDropdownId" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Lớp học</a>
        <div class="dropdown-menu header-dropdown-menu" aria-labelledby="lophocDropdownId">
          <a class="dropdown-item header-dropdown-item" href="/lophoc/taomoi">Thêm mới</a>
          <a class="dropdown-item header-dropdown-item" href="/lophoc">Danh sách lớp học</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="/monhoc" id="monhocDropdownId" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Môn học</a>
        <div class="dropdown-menu header-dropdown-menu" aria-labelledby="monhocDropdownId">
          <a class="dropdown-item header-dropdown-item" href="/monhoc/taomoi">Thêm mới</a>
          <a class="dropdown-item header-dropdown-item" href="/monhoc">Danh sách môn học</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/diem">Quản lý điểm</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="/baocao" id="baocaoDropdownId" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Báo cáo</a>
        <div class="dropdown-menu header-dropdown-menu" aria-labelledby="baocaoDropdownId">
          <a class="dropdown-item header-dropdown-item" href="/baocao/theomon">Theo môn</a>
          <a class="dropdown-item header-dropdown-item" href="/baocao/theohocky">Theo học kỳ</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="/cauhinh">Cấu hình</a>
      </li>
      <!-- <li class="nav-item ml-auto">
        <?php $__env->startComponent('components.profileShortcut'); ?> <?php if (isset($__componentOriginal790a03f00290887564695e54f1c9dc7cfbc62446)): ?>
<?php $component = $__componentOriginal790a03f00290887564695e54f1c9dc7cfbc62446; ?>
<?php unset($__componentOriginal790a03f00290887564695e54f1c9dc7cfbc62446); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
      </li> -->
    </ul>
  </div>
</nav>
<?php /**PATH C:\Users\hieupc\Desktop\student-management\resources\views/components/header.blade.php ENDPATH**/ ?>