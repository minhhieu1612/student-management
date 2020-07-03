@extends('templates.master') @section('title','Cấu hình tham số')
@section('content') @component('components.pageTitle') @slot('title') Cấu hình
tham số @endslot @endcomponent

<div>
  <div class="card">
    <div class="card-header">
      Thông tin tham số
    </div>
    <div class="card-body">
      @foreach($cauhinhs as $cauhinh)
      @if($loop->index == 0)
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="TuoiToiThieu">Tuổi tối thiểu <span class="text-danger">*</span></label>
          <div class="col-md-8">{{ $cauhinh->TuoiToiThieu }}</div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="SoLopToiDa">Số lớp tối đa <span class="text-danger">*</span></label>
            <div class="col-md-8">{{ $cauhinh->SoLopToiDa }}</div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="SiSoToiDa">Sĩ số tối đa <span class="text-danger">*</span></label>
            <div class="col-md-8">{{ $cauhinh->SiSoToiDa }}</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="DiemToiThieu">Điểm tối thiểu <span class="text-danger">*</span></label>
            <div class="col-md-8">{{ $cauhinh->DiemToiThieu }}</div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="DiemToiDa">Điểm tối đa <span class="text-danger">*</span></label>
            <div class="col-md-8">{{ $cauhinh->DiemToiDa }}</div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="DiemDat">Điểm đạt <span class="text-danger">*</span></label>
            <div class="col-md-8">{{ $cauhinh->DiemDat }}</div>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/cauhinh/sua"><button type="submit" class="btn-confirm">Sửa</button></a>
  </div>
</div>

@endsection
