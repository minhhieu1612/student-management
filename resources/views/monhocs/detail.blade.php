@extends('templates.master') @section('title','Thông tin môn học')
@section('content')
@component('components.pageTitle')
  @slot('title') Thông tin môn học
  @endslot
@endcomponent

<div>
  <div class="card mt-3">
    <div class="card-header">Thông tin môn học</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Mã môn học</label>
            <div class="col-md-8">
              <p class="fs-14">MH111</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Tên môn học</label>
            <div class="col-md-8">
              <p class="fs-14">Anh Văn</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Ngày tạo</label>
            <div class="col-md-8">
              <p class="fs-14">30/12/2019 9:00</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày cập nhật</label>
            <div class="col-md-8">
              <p class="fs-14">12/02/2020 15:00</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/lophoc/sua/1"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

@endsection
