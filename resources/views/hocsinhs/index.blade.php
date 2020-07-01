@extends('templates.master')
@section('title','Hồ sơ học sinh')
@section('content')

@component('components.pageTitle')
@slot('title')
Hồ sơ học sinh
@endslot
@endcomponent

<?php //Hiển thị danh sách học sinh?>
<div class="mb-4">
  <a href="/hosohocsinh/taomoi"><button class="btn-create">Thêm mới</button></a>
  <button type="button" class="btn-create" data-toggle="modal" data-target="#modelImport">
    Import
  </button>

  <div class="modal fade" id="modelImport" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="/hosohocsinh/import" method="POST" class="modal-content" enctype="multipart/form-data">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Nhập dữ liệu học sinh</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="file" name="file" accept=".csv" required />
            <label class="custom-file-label" for="customFile">Nhập file từ máy tính</label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn-confirm mr-2">Lưu lại</button>
          <button type="button" class="btn-cancel" data-dismiss="modal">
            Hủy bỏ
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
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
          <button class="btn btn-primary mt-n1 dropdown-toggle" type="button" id="action-{{ $hocsinh->MaHocSinh }}"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Thao tác
          </button>
          <div class="dropdown-menu" aria-labelledby="action-{{ $hocsinh->MaHocSinh }}">
            <a class="dropdown-item" href="/hosohocsinh/sua/{{ $hocsinh->MaHocSinh }}">Chỉnh sửa</a>
            <button class="dropdown-item" data-toggle="modal" data-target="#delStudent{{ $hocsinh->MaHocSinh }}">
              Xóa
            </button>
          </div>
        </div>
        <div class="modal fade" id="delStudent{{ $hocsinh->MaHocSinh }}" tabindex="-1" role="dialog"
          aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form action="/hosohocsinh/xoa/{{ $hocsinh->MaHocSinh }}" method="GET" class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa Học Sinh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Bạn có chắc muốn xóa học sinh</p>
                <p class="text-highlight">{{ $hocsinh->HoVaTen }}</p>
                <p>khỏi hệ thống?</p>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-confirm mr-2">Xác nhận</button>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
              </div>
            </form>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection