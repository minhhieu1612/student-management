@extends('templates.master') @section('title','Thông tin học sinh')
@section('content')
@component('components.pageTitle')
@slot('title') Thông tin học sinh
@endslot
@endcomponent

<div>
  <div class="card">
    <div class="card-header">
      Thông tin học sinh
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Mã học sinh</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $hocsinh->MaHocSinh }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Họ Và Tên</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $hocsinh->HoVaTen}}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày Sinh</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $hocsinh->NgaySinh }}</p>
            </div>
          </div>
          <div class="form-group row p-relative">
            <label class="label col-md-4">Giới Tính</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $hocsinh->GioiTinh ? "Nam" : "Nữ" }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Địa Chỉ</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $hocsinh->DiaChi }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Quê quán</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $hocsinh->QueQuan }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày tạo</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $hocsinh->created_at ? $hocsinh->created_at->format('d/m/Y H:i'):'' }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày cập nhật</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $hocsinh->updated_at ? $hocsinh->updated_at->format('d/m/Y H:i'):'' }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin lớp học</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Tên lớp học</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $lop->TenLop ?? "" }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Khối</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $lop->Khoi ?? "" }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Năm học</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $lop->NamHoc ?? "" }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header d-flex">
      Thông tin điểm tổng kết môn học
      <button class="btn fs-14 ml-auto mr-1 trigger-semester active">
        Học kì I
      </button>
      <button class="btn fs-14 mr-1 trigger-semester">Học kì II</button>
      <button class="btn fs-14 trigger-semester">Cả năm</button>
    </div>
    <div class="card-body">
      <div class="row semester d-flex">
        @foreach($monhocs as $monhoc)
        @if($loop->index == 0 || $loop->index == 5 )<div class="col-md-6"> @endif
          <div class="form-group row">
            <label class="label col-md-4">{{ $monhoc->TenMonHoc }}</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $diemhk1->where('MaMonHoc', $monhoc->MaMonHoc)->first()->DiemTongHK ?? '' }}</p>
            </div>
          </div>
        @if($loop->index == 4 || $loop->index == $loop->count-1  )</div> @endif
        @endforeach
      </div>
      <div class="row semester">
        @foreach($monhocs as $monhoc)
        @if($loop->index == 0 || $loop->index == 5 )<div class="col-md-6"> @endif
          <div class="form-group row">
            <label class="label col-md-4">{{ $monhoc->TenMonHoc }}</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $diemhk2->where('MaMonHoc', $monhoc->MaMonHoc)->first()->DiemTongHK ?? '' }}</p>
            </div>
          </div>
        @if($loop->index == 4 || $loop->index == $loop->count-1  )</div> @endif
        @endforeach
      </div>
      <div class="row semester">
        @foreach($monhocs as $monhoc)
          @if($loop->index == 0 || $loop->index == 5 )<div class="col-md-6"> @endif
          <div class="form-group row">
            <label class="label col-md-4">{{ $monhoc->TenMonHoc }}</label>
            <div class="col-md-8">
              <p class="fs-14">{{ (($diemhk1->where('MaMonHoc', $monhoc->MaMonHoc)->first()->DiemTongHK ?? 0.0) + ($diemhk2->where('MaMonHoc', $monhoc->MaMonHoc)->first()->DiemTongHK ?? 0.0)) / 2 }}</p>
            </div>
          </div>
          @if($loop->index == 4 || $loop->index == $loop->count-1  )</div> @endif
        @endforeach
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin lớp học</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Học kì I</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $tbhk1 }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Học kì II</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $tbhk2 }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">cả năm</label>
            <div class="col-md-8">
              <p class="fs-14">{{ ($tbhk1 + $tbhk2) / 2 }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6"></div>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/hosohocsinh/sua/{{ $hocsinh->MaHocSinh }}"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

@endsection
