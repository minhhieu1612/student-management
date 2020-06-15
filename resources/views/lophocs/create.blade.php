@extends('templates.master')
@section('title','Thêm lớp mới')
@section('content')

<div class="page-header">
  <h4>Thêm lớp mới</h4>
</div>
<div>
  <form method="POST" action="/lophoc/create">
    @csrf
    <div class="field">
      <label class="label" for="NamHoc">Nam Hoc</label>
      <div class="control">
        <input class="input" type="number" name="NamHoc" id="NamHoc" value="" required>
      </div>
    </div>
    <div class="field">
      <label class="label" for="Khoi">Khoi</label>
      <div class="control">
        <input class="input" type="number" name="Khoi" id="Khoi" value="" required>
      </div>
    </div>
    <div class="field">
      <label class="label" for="TenLop">Ten Lop</label>
      <div class="control">
        <input class="input" type="text" name="TenLop" id="TenLop" value="" required>
      </div>
    </div>
    <div class="field">
      <label class="label" for="MaHocSinh">Ma Hoc Sinh</label>
      <div class="control">
        <input class="input" type="textarea" name="MaHocSinh" id="MaHocSinh" value="" required>
      </div>
    </div>
    <div>
      <button type="submit">Xep lop</button>
    </div>
  </form>
</div>

@endsection
