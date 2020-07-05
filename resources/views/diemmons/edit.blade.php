@extends('templates.master') @section('title','Quản lý điểm số')
@section('content') @component('components.pageTitle') @slot('title') Quản lý
điểm số @endslot @endcomponent

<form action="/diem/sua/{{ $form[0] }}/{{ $form[1] }}/{{ $form[2] }}/{{ $form[3] }}" method="POST">
  @csrf
  @method('PUT')
  <div class="card mt-3">
    <div class="card-header">Thông tin chung</div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Tên lớp học</label>
            <div class="col-md-8">
              {{ $form[0] }}
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Môn học</label>
            <div class="col-md-8">
              {{ $tenmonhoc }}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4">Năm học</label>
            <div class="col-md-8">
              {{ $form[2] }}
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4">Học kỳ</label>
            <div class="col-md-8">
              Học kỳ {{ $form[3] }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card mt-3">
    <div class="card-header">Thông tin điểm học sinh</div>
    <div class="card-body">
      <h4 class="text-center">{{ $form[0] }}</h4>
      <table
        id="DataList"
        class="table table-bordered table-responsive-md table-hover"
      >
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
            <td>
              <input
                class="form-control w-100 text-center"
                type="number"
                name="mieng{{ $hocsinh->MaHocSinh }}"
                max="10"
                min="0"
                step="0.5"
                value="{{ App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->DiemMieng ?? 0.0 }}"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="number"
                name="15p{{ $hocsinh->MaHocSinh }}"
                max="10"
                min="0"
                step="0.5"
                value="{{ App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->Diem15P ?? 0.0 }}"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="number"
                name="1tiet{{ $hocsinh->MaHocSinh }}"
                max="10"
                min="0"
                step="0.5"
                value="{{ App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->Diem1Tiet ?? 0.0 }}"
              />
            </td>
            <td>
              <input
                class="form-control w-100 text-center"
                type="number"
                name="hocky{{ $hocsinh->MaHocSinh }}"
                max="10"
                min="0"
                step="0.5"
                value="{{ App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->DiemHK ?? 0.0 }}"
              />
            </td>
            <td>{{ App\Diemmonhoc::where([['MaHocSinh', $hocsinh->MaHocSinh],['MaMonHoc', $form[1]],['HocKy', $form[3]],['NamHoc', $form[2]]])->first()->DiemTongHK ?? 0.0 }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <div class="text-center mt-5">
    <button type="submit" class="btn-confirm mr-3">Lưu</button>
    <a href="/diem"><button type="button" class="btn-cancel">Hủy bỏ</button></a>
  </div>
</form>

@endsection
