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
            <p class="fs-14">{{ $monhoc->MaMonHoc }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Tên môn học</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $monhoc->TenMonHoc }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Ngày tạo</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $monhoc->created_at }}</p>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Ngày cập nhật</label>
            <div class="col-md-8">
              <p class="fs-14">{{ $monhoc->updated_at }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/monhoc/sua/{{ $monhoc->MaMonHoc }}"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

@endsection
