@extends('templates.master') @section('title','Báo cáo tổng kết theo học kỳ')
@section('content') @component('components.pageTitle') @slot('title') Báo cáo tổng kết theo học kỳ @endslot @endcomponent

<div>
  <div class="card mt-3">
    <div class="card-header">Thông tin chung</div>
    <div class="card-body">
      <form action="/baocao/theohocky" method="POST" class="row">
        @csrf
        <div class="col-md-6">
         <div class="form-group row">
            <label class="label col-md-4" for="HocKy"
              >Học kỳ <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="HocKy"
                id="HocKy"
                value=""
              >
                <option value="1">Học kỳ I</option>
                <option value="2">Học kỳ II</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn">Xem điểm</button>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="NamHoc"
              >Năm học <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="NamHoc"
                id="NamHoc"
                value=""
              >
                @foreach($namhocs as $namhoc)
                <option value="{{ $namhoc->NamHoc }}">{{ $namhoc->NamHoc }}</option>
                @endforeach
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
      <button class="btn mb-3"><span><i class="fa fa-download mr-2"></i></span>Export</button>
      <table
        id="DataList"
        class="table table-bordered table-responsive-md table-hover"
      >
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã LH</th>
            <th>Khối</th>
            <th>Tên lớp học</th>
            <th>Sĩ số</th>
            <th>Số lượng đạt</th>
            <th>Tỷ lệ</th>
          </tr>
        </thead>
        <tbody>
          @foreach($lops ?? [] as $index => $lop)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $lop->MaLopHoc }}</td>
            <td>{{ $lop->Khoi }}</td>
            <td>{{ $lop->TenLop }}</td>
            <td>{{ $lop->SiSo }}</td>
            <td>{{ $dats[$index] }}</td>
            <td>{{ $dats[$index] / (($lop->SiSo == 0) ? 1 : $lop->SiSo) * 100 }}%</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
