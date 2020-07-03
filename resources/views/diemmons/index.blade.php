@extends('templates.master') @section('title','Quản lý điểm số')
@section('content') @component('components.pageTitle') @slot('title') Quản lý
điểm số @endslot @endcomponent

<div>
  <div class="card mt-3">
    <div class="card-header">Thông tin chung</div>
    <div class="card-body">
      <form action="/diem/xem" method="POST" class="row">
        @csrf
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="TenLopHoc">Tên lớp học <span class="text-danger">*</span></label>
            <div class="col-md-8">
              <select class="form-control custom-select" name="TenLop" id="TenLop" value="">
                @foreach($lops as $lop)
                <option value="{{ $lop->TenLop }}" {{ '' == $malop ? '' : ($malop==$lop->MaLopHoc? 'selected': '') }}>{{ $lop->TenLop }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="MonHoc">Môn học <span class="text-danger">*</span></label>
            <div class="col-md-8">
              <select class="form-control custom-select" name="MonHoc" id="MonHoc" value="">
                @foreach($monhocs as $monhoc)
                <option value="{{ $monhoc->MaMonHoc }}" {{ '' == $mamon ? '' : ($mamon==$monhoc->MaMonHoc? 'selected': '') }}>{{ $monhoc->TenMonHoc }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn">Xem điểm</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="NamHoc">Năm học <span class="text-danger">*</span></label>
            <div class="col-md-8">
              <select class="form-control custom-select" name="NamHoc" id="NamHoc" value="">
                @foreach($namhocs as $nh)
                  <option value="{{ $nh->NamHoc }}" {{ '' == $namhoc ? '' : ($namhoc==$nh->NamHoc? 'selected': '') }}>{{ $nh->NamHoc }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="HocKy">Học kỳ <span class="text-danger">*</span></label>
            <div class="col-md-8">
              <select class="form-control custom-select" name="HocKy" id="HocKy" value="">
                <option value="1" {{ '' == $hocky ? '' : ($hocky==1? 'selected': '') }}>Học kỳ 1</option>
                <option value="2" {{ '' == $hocky ? '' : ($hocky==2? 'selected': '') }}>Học kỳ 2</option>
              </select>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin điểm học sinh</div>
    <div class="card-body">
      <a href="/diem/export/{{ request('TenLop') ."/". request('MonHoc') ."/". request('NamHoc') ."/". request('HocKy') }}" class="btn mb-3"><span><i class="fa fa-download mr-2"></i></span>Export</a>
      <h4 class="text-center">{{ request('TenLop') }}</h4>
      <table id="DataList" class="table table-bordered table-responsive-md table-hover">

        <thead>
          <tr>
            <th>STT</th>
            <th>Mã Học Sinh</th>
            <th>Họ và Tên</th>
            <th>Điểm miệng</th>
            <th>Điểm 15p</th>
            <th>Điểm 1 tiết</th>
            <th>Điểm học kỳ</th>
            <th>Điểm tổng kết</th>
          </tr>
        </thead>
        <tbody>
          @foreach($hocsinhs ?? [] as $hocsinh)
          <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $hocsinh->MaHocSinh }}</td>
            <td>{{ $hocsinh->HoVaTen }}</td>
            <td>{{ $hocsinh->DiemMieng }}</td>
            <td>{{ $hocsinh->Diem15P }}</td>
            <td>{{ $hocsinh->Diem1Tiet }}</td>
            <td>{{ $hocsinh->DiemHK }}</td>
            <td>{{ $hocsinh->DiemTongHK }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  @if($malop != '')
  <div class="text-center mt-5">
    <a href="/diem/sua/{{ request('TenLop') ."/". request('MonHoc') ."/". request('NamHoc') ."/". request('HocKy') }}"><button
        class="btn-confirm mr-3">Sửa</button></a>
  </div>
  @endif
</div>

@endsection
