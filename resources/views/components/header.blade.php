<nav class="navbar navbar-expand-lg navbar-light bg-linear header">
  <a class="navbar-brand text-white" href="/">Quản lý học sinh</a>
  <button
    class="navbar-toggler d-lg-none"
    type="button"
    data-toggle="collapse"
    data-target="#collapsibleNavId"
    aria-controls="collapsibleNavId"
    aria-expanded="false"
    aria-label="Toggle menu"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-1 ml-lg-2 d-flex w-100">
       <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle text-white"
          href="/hocsinh"
          id="hocsinhDropdownId"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
          >Học sinh</a>
        <div class="dropdown-menu header-dropdown-menu" aria-labelledby="hosohocsinhDropdownId">
          <a class="dropdown-item header-dropdown-item" href="/hosohocsinh">Danh sách học sinh</a>
          <a class="dropdown-item header-dropdown-item" href="/hosohocsinh/create">Thêm mới</a>
          <a class="dropdown-item header-dropdown-item" href="/hosohocsinh/update">Chỉnh sửa</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a
          class="nav-link dropdown-toggle text-white"
          href="/lophoc"
          id="lophocDropdownId"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
          >Lớp học</a>
        <div class="dropdown-menu header-dropdown-menu" aria-labelledby="lophocDropdownId">
          <a class="dropdown-item header-dropdown-item" href="/lophoc">Danh sách lớp học</a>
          <a class="dropdown-item header-dropdown-item" href="/lophoc/create">Thêm mới</a>
          <a class="dropdown-item header-dropdown-item" href="/lophoc/edit">Chỉnh sửa</a>
          <a class="dropdown-item header-dropdown-item" href="/lophoc/delete">Xóa lớp</a>
        </div>
      </li>
      <li class="nav-item ml-auto">
        @component('components.profileShortcut')
        @endcomponent
      </li>
    </ul>
  </div>
</nav>
