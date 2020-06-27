@extends('templates.master')
@section('title','Hồ sơ học sinh')
@section('content')

@component('components.pageTitle')
 @slot('title')
      Hồ sơ học sinh
  @endslot
@endcomponent

<?php //Hiển thị danh sách học sinh?>

<a href="/hosohocsinh/taomoi"><button class="btn-create mb-4">Thêm mới</button></a>
<table id="DataList" class="table table-bordered table-responsive-md table-hover">
  <thead>
    <tr>
      <th>Mã Học Sinh</th>
      <th>Họ và Tên</th>
      <th>Giới Tính</th>
      <th>Ngày Sinh</th>
      <th>Địa Chỉ</th>
      <th>Quê Quán</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php //Vòng lập foreach lấy giá vào bảng?>
    @foreach($hocsinhs as $hocsinh)
    <tr>
      <td>{{ $hocsinh->MaHocSinh }}</td>
      <td><a href="/hosohocsinh/xem/{{ $hocsinh->MaHocSinh }}">{{ $hocsinh->HoVaTen }}</a></td>
      <td>{{ $hocsinh->GioiTinh ? "Nam" : "Nữ" }}</td>
      <td>{{ $hocsinh->NgaySinh }}</td>
      <td>{{ $hocsinh->DiaChi }}</td>
      <td>
        {{ $hocsinh->QueQuan }}</td>
      <td>
        <div class="dropdown">
          <button class="btn btn-primary mt-n1 dropdown-toggle" type="button" id="action-{{ $hocsinh->MaHocSinh }}" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
                Thao tác
              </button>
          <div class="dropdown-menu" aria-labelledby="action-{{ $hocsinh->MaHocSinh }}">
          <a class="dropdown-item" href="/hosohocsinh/sua/{{ $hocsinh->MaHocSinh }}">Chỉnh sửa</a>
          <button class="dropdown-item" data-toggle="modal" data-target="#delStudent{{ $hocsinh->MaHocSinh }}">
            Xóa
          </button>
          </div>
        </div>
        <div class="modal fade" id="delStudent{{ $hocsinh->MaHocSinh }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa Học Sinh</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <p>Bạn có chắc muốn xóa học sinh "{{ $hocsinh->HoVaTen }}"?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-confirm mr-2">Xác nhận</button>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
              </div>
            </div>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
