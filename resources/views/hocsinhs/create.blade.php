@extends('templates.master') @section('title','Thêm mới học sinh')
@section('content')
@component('components.pageTitle')
@slot('title') Thêm mới học sinh
@endslot
@endcomponent

<div>
  <form method="POST" action="/hosohocsinh">
    @csrf
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
                <input class="form-control" type="text" name="HoVaTen" id="HoVaTen" value="" placeholder="" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="NgaySinh">Ngày Sinh <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="date" name="NgaySinh" id="NgaySinh" value="" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="GioiTinh">Giới Tính <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <select class="form-control custom-select" name="GioiTinh" id="GioiTinh">
                  <option value="1">Nam</option>
                  <option value="0">Nữ</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="DiaChi">Địa Chỉ <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="DiaChi" id="DiaChi" value="" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="QueQuan">Quê quán</label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="QueQuan" id="QueQuan" value="" />
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
          <label class="label col-md-3" for="MaLopHoc">Chọn lớp</label>
          <div class="col-md-4">
            <select class="form-control custom-select" name="MaLopHoc" id="MaLopHoc">
              @if (count($lophocs) > 0)
                @foreach($lophocs as $lophoc)
                <option value="{{ $lophoc->MaLopHoc }}">{{ $lophoc->TenLop }}</option>
                @endforeach
              @endif
            </select>
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
