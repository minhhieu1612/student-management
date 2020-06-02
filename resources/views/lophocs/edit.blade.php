@extends('templates.master')
@section('title','Hồ sơ học sinh')
@section('content')

<div class="page-header"><h4>Chỉnh sửa hồ sơ học sinh</h4></div>
<div>
    <form method="POST" action="/hosohocsinh/{{ $hocsinh->MaHocSinh }}">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label" for="HoVaTen">Họ Và Tên</label>
            <div class="control">
                <input
                    class="input"
                    type="text"
                    name="HoVaTen"
                    id="HoVaTen"
                    value="{{ $hocsinh->HoVaTen }}">
            </div>
        </div>
        <div class="field">
            <label class="label" for="NgaySinh">Ngày Sinh</label>
            <div class="control">
                <input
                    class="input"
                    type="date"
                    name="NgaySinh"
                    id="NgaySinh"
                    value="{{ $hocsinh->NgaySinh }}">
            </div>
        </div> 
        <div class="field">
            <label class="label" for="GioiTinh">Giới Tính</label>
            <div class="control">
                <select name="GioiTinh" id="GioiTinh">
                    <option value="{{ $hocsinh->GioiTinh }}">{{ $hocsinh->GioiTinh ? 'Nam' : 'Nữ' }}</option>
                    <option value="{{ !$hocsinh->GioiTinh }}">{{ $hocsinh->GioiTinh ? 'Nữ' : 'Nam' }}</option>
                </select>
            </div>
        </div> 
        <div class="field">
            <label class="label" for="DiaChi">Địa Chỉ</label>
            <div class="control">
                <textarea
                    class="textarea"
                    name="DiaChi"
                    id="DiaChi">{{ $hocsinh->DiaChi }}</textarea>
            </div>
        </div> 
        <div class="field">
            <label class="label" for="QueQuan">Quê quán</label>
            <div class="control">
                <textarea
                    class="textarea"
                    name="QueQuan"
                    id="QueQuan">{{ $hocsinh->QueQuan }}</textarea>
            </div>
        </div> 
        <div>
            <button type="submit">Sửa Hồ Sơ</button>
            <a href="/hosohocsinh"><button>Hủy</button></a>
        </div>   
    </form>
</div>
