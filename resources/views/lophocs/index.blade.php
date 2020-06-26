@extends('templates.master')
@section('title','Danh sách lớp học')
@section('content')

@component('components.pageTitle')
 @slot('title')
      Danh sách lớp học
  @endslot
@endcomponent

<p><a href="/lophoc/create"><button>Xep lop moi</button></a></p>
<p><a href="/lophoc/add"><button>Xep hoc sinh</button></a></p>
<table id="DataList" class="table table-bordered table-responsive-md table-hover" style="width: 100%;">
  <thead>
    <tr>
      <th>Ma Lop Hoc</th>
      <th>Nam Hoc</th>
      <th>Khoi</th>
      <th>Ten Lop</th>
      <th>Si So</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lophocs as $lophoc)
    <tr>
      <td>{{ $lophoc->MaLopHoc }}</td>
      <td>{{ $lophoc->NamHoc }}</td>
      <td>{{ $lophoc->Khoi }}</td>
      <td>{{ $lophoc->TenLop }}</td>
      <td>{{ $lophoc->SiSo }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
