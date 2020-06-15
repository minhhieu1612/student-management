@extends('templates.master')
@section('title','Thêm lớp học')
@section('content')

<div>
  <div class="page-header">
    <h4>Thêm lớp học</h4>
  </div>
  <form method="POST" action="/lophoc/add">
    @csrf
    <div class="field">
      <label class="label" for="MaLopHoc">Ma Lop Hoc</label>
      <div class="control">
        <input class="input" type="number" name="MaLopHoc" id="MaLopHoc" value="">
      </div>
    </div>
    <div class="field">
      <label class="label" for="MaHocSinh">Ma Hoc Sinh</label>
      <div class="control">
        <input class="input" type="textarea" name="MaHocSinh" id="MaHocSinh" value="">
      </div>
      <div>
        <button type="submit">Xep hoc sinh</button>
      </div>
  </form>
</div>

@endsection
