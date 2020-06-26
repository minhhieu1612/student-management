@extends('templates.master')
@section('title','Hồ sơ học sinh')
@section('content')

@component('components.pageTitle')
 @slot('title')
      Hồ sơ học sinh
  @endslot
@endcomponent

<?php //Hiển thị danh sách học sinh?>

<a href="/hosohocsinh/create"><button class="btn-create mb-4">Thêm mới</button></a>
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
      <td><a href="/hocsinh/xem/{{ $hocsinh->MaHocSinh }}">{{ $hocsinh->HoVaTen }}</a></td>
      <td>{{ $hocsinh->GioiTinh ? "Nam" : "Nữ" }}</td>
      <td>{{ $hocsinh->NgaySinh }}</td>
      <td>{{ $hocsinh->DiaChi }}</td>
      <td>
        {{ $hocsinh->QueQuan }}</td>
      <td>
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="action-{{ $hocsinh->MaHocSinh }}" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
                Thao tác
              </button>
          <div class="dropdown-menu" aria-labelledby="action-{{ $hocsinh->MaHocSinh }}">
          <button class="dropdown-item" href="/hocsinh/edit/{{ $hocsinh->MaHocSinh }}">Chỉnh sửa</button>
          <button class="dropdown-item">Xóa</button>
           <!-- Button trigger modal -->
           <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
             Launch
           </button>




          </div>
        </div>
      </td>
    </tr>
    @endforeach
    <!-- Modal -->
           <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
             <div class="modal-dialog" role="document">
               <div class="modal-content">
                 <div class="modal-header">
                   <h5 class="modal-title">Modal title</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                   Body
                 </div>
                 <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="button" class="btn btn-primary">Save</button>
                 </div>
               </div>
             </div>
           </div>
  </tbody>
</table>
@endsection
