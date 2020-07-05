@extends('templates.master')
@section('title','Chỉnh sửa lớp học')
@section('content')

@component('components.pageTitle')
@slot('title') Chỉnh sửa lớp học
@endslot
@endcomponent

<div>
  <form method="POST" action="/lophoc/sua/{{ $lophoc->MaLopHoc }}">
    @csrf
    <div class="card">
      <div class="card-header">
        Thông tin lớp học
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="TenLop">Tên lớp học <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="text" name="TenLop" id="TenLop" value="{{ $lophoc->TenLop }}"
                  placeholder="" required />
              </div>
            </div>
            <div class="form-group row">
              <label class="label col-md-4" for="Khoi">Khối <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="number" name="Khoi" id="Khoi" value="{{ $lophoc->Khoi }}"
                  placeholder="" required />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group row">
              <label class="label col-md-4" for="NamHoc">Năm học <span class="text-danger">*</span></label>
              <div class="col-md-8">
                <input class="form-control" type="number" name="NamHoc" id="NamHoc" value="{{ $lophoc->NamHoc }}"
                  placeholder="" required />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <button type="submit" class="btn-confirm mr-3">Lưu lại</button>
      <a href="/lophoc"><button type="button" class="btn-cancel">Hủy bỏ</button></a>
    </div>
  </form>
</div>

@endsection
