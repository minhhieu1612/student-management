@extends('templates.master')
@section('title','Hồ sơ học sinh')
@section('content')

<div class="page-header">
  <h4>Hồ sơ học sinh</h4>
</div>

<?php //Hiển thị danh sách học sinh?>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="table-responsive">
      <p><a href="/hosohocsinh/create"><button>Thêm mới</button></a>
      </p>
      <p><a href="/hosohocsinh/delete"><button>Xóa</button></a>
      </p>
      <table id="DataList" class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Mã Học Sinh</th>
            <th>Họ và Tên</th>
            <th>Giới Tính</th>
            <th>Ngày Sinh</th>
            <th>Địa Chỉ</th>
            <th>Quê Quán</th>
          </tr>
        </thead>
        <tbody>
          <?php //Vòng lập foreach lấy giá vào bảng?>
          @foreach($hocsinhs as $hocsinh)
          <tr>
            <td style="text-align: center; vertical-align: middle;">{{ $hocsinh->MaHocSinh }}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $hocsinh->HoVaTen }}</td>
            <td style="text-align: center; vertical-align: middle;">{{ $hocsinh->GioiTinh ? "Nam" : "Nữ" }}</td>
            <td style="text-align: center; vertical-align: middle; width: 10%;">{{ $hocsinh->NgaySinh }}</td>
            <td style="text-align: center; vertical-align: middle; width: 10%;">{{ $hocsinh->DiaChi }}</td>
            <td style="text-align: center; vertical-align: middle;">
              {{ $hocsinh->QueQuan }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection