@extends('templates.master')
@section('title','Hồ sơ học sinh')
@section('content')

<div class="page-header"><h4>Xóa hồ sơ học sinh</h4></div>
<div>
    <form method="POST" action="/hosohocsinh">
        @csrf
        @method('DELETE')
        <div class="field">
            <label class="label" for="MaHocSinh">Mã Học Sinh</label>
            <input type="text" name="MaHocSinh">
        </div>
        <div>
            <button type="submit">Xóa</button>
        </div>
    </form>
</div>

@endsection
