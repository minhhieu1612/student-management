@extends('templates.master') @section('title','Chỉnh sửa học sinh')
@section('content')
@component('components.pageTitle')
@slot('title') Chỉnh sửa học sinh
@endslot
@endcomponent

<div>
  <form method="POST" action="/hosohocsinh/sua/{{ $hocsinh->MaHocSinh }}">
    @csrf
    @method('PUT')
    <div class="card">
      <div class="card-header">
        Thông tin học sinh
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="HoVaTen">Họ Và Tên <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="HoVaTen" id="HoVaTen" value="{{ $hocsinh->HoVaTen }}"
                  placeholder="" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="NgaySinh">Ngày Sinh <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="date" name="NgaySinh" id="NgaySinh" value="{{ $hocsinh->NgaySinh }}"
                  required />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="GioiTinh">Giới Tính <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <select class="form-control custom-select" name="GioiTinh" id="GioiTinh">
                  <option value="1">{{ $hocsinh->GioiTinh ? "Nam" : "Nữ"}}</option>
                  <option value="0">{{ $hocsinh->GioiTinh ? "Nữ" : "Nam"}}</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="DiaChi">Địa Chỉ <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="DiaChi" id="DiaChi" value="{{ $hocsinh->DiaChi }}"
                  required />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="QueQuan">Quê quán</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="QueQuan" id="QueQuan" value="{{ $hocsinh->QueQUan }}" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mt-3">
      <div class="card-header">Thông tin lớp học</div>
      <div class="card-body">
        <div class="form-group row">
          <label class="label col-md-3" for="MaLopHoc"
            >Mã lớp học</label
          >
          <div class="col-md-4">
            <input
              class="form-control"
              type="text"
              name="MaLopHoc"
              id="MaLopHoc"
              value="{{ $malop }}"
              placeholder=""
            />
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn-confirm mr-3">Lưu lại</button>
      <a href="/hosohocsinh"><button type="button" class="btn-cancel">Hủy bỏ</button></a>
    </div>
  </form>
</div>

@endsection