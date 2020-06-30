@extends('templates.master') @section('title','Quản lý điểm số')
@section('content') @component('components.pageTitle') @slot('title') Quản lý
điểm số @endslot @endcomponent

<div>
  <div class="card mt-3">
    <div class="card-header">Thông tin chung</div>
    <div class="card-body">
      <form action="/diem/xem" method="POST" class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="label col-md-4" for="TenLopHoc"
              >Tên lớp học <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="TenLopHoc"
                id="TenLopHoc"
                value="Chọn lớp"
              >
                <option value="2018">10A1</option>
                <option value="2019">10A2</option>
                <option value="2020">10A3</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="MonHoc"
              >Môn học <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="MonHoc"
                id="MonHoc"
                value="Chọn môn"
              >
                <option value="Toán học">Toán học</option>
                <option value="Vật lý">Vật Lý</option>
                <option value="Hóa học">Hóa học</option>
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
                value="Chọn khối"
              >
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="label col-md-4" for="HocKy"
              >Học kỳ <span class="text-danger">*</span></label
            >
            <div class="col-md-8">
              <select
                class="form-control custom-select"
                name="HocKy"
                id="HocKy"
                value="Chọn khối"
              >
                <option value="1">Học kỳ I</option>
                <option value="2">Học kỳ II</option>
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
      <h4 class="text-center">Lớp 10A1</h4>
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
          <tr>
            <td>1</td>
            <td>HS001</td>
            <td>Đặng Quan Hồng</td>
            <td>7</td>
            <td>6.5</td>
            <td>8.5</td>
            <td>8</td>
            <td>7.6</td>
          </tr>
          <tr>
            <td>2</td>
            <td>HS002</td>
            <td>Đặng Thùy Nhi</td>
            <td>8</td>
            <td>7.5</td>
            <td>8.5</td>
            <td>9</td>
            <td>8.9</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="text-center mt-5">
    <a href="/diem/sua"><button class="btn-confirm mr-3">Sửa</button></a>
  </div>
</div>

@endsection
