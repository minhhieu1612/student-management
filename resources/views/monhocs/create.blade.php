@extends('templates.master') @section('title','Thêm mới môn học')
@section('content') @component('components.pageTitle') @slot('title') Thêm mới
môn học @endslot @endcomponent

<div>
  <form method="POST" action="/monhoc/taomoi">
    @csrf
    <div class="card">
      <div class="card-header">
        Thông tin môn học
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="form-group row">
              <label class="label col-md-4" for="TenMonHoc"
                >Tên môn học <span class="text-danger">*</span></label
              >
              <div class="col-md-8">
                <input
                  class="form-control"
                  type="text"
                  name="TenMonHoc"
                  id="TenMonHoc"
                  value=""
                  placeholder=""
                />
              </div>
            </div>
          </div>
          <div class="col-md-6"></div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 pt-5">
      <button type="submit" class="btn-confirm mr-3">Lưu lại</button>
      <button type="button" class="btn-cancel">Hủy bỏ</button>
    </div>
  </form>
</div>

@endsection
