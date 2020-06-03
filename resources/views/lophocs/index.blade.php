@extends('templates.master')
@section('title','Lop hoc')
@section('content')

<div class="page-header"><h4>Lop hoc</h4></div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="table-responsive">
            <p><a href="/lophoc/create"><button>Xep lop moi</button></a></p>
            <p><a href="/lophoc/add"><button>Xep hoc sinh</button></a></p>
            <table id="DataList" class="table table-bordered table-hover">
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
                        <td style="text-align: center; vertical-align: middle;">{{ $lophoc->MaLopHoc }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $lophoc->NamHoc }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $lophoc->Khoi }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $lophoc->TenLop }}</td>
                        <td style="text-align: center; vertical-align: middle;">{{ $lophoc->SiSo }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
