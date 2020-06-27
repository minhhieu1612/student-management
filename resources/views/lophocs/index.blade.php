@extends('templates.master') @section('title','Danh sách lớp học')
@section('content')
@component('components.pageTitle')
  @slot('title') Danh sách lớp học
  @endslot
@endcomponent

<div class="mb-4">
  <a href="/lophoc/create"><button class="btn-create mr-2">Thêm mới</button></a>
  <button
    type="button"
    class="btn-create"
    data-toggle="modal"
    data-target="#modelImport"
  >
    Import
  </button>

  <div
    class="modal fade"
    id="modelImport"
    tabindex="-1"
    role="dialog"
    aria-labelledby="modelTitleId"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <form action="/lophoc/import" method="POST" class="modal-content">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title">Nhập dữ liệu học sinh</h5>
          <button
            type="button"
            class="close"
            data-dismiss="modal"
            aria-label="Close"
          >
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="custom-file">
            <input
              type="file"
              class="custom-file-input"
              id="customFile"
              accept=".csv"
            />
            <label class="custom-file-label" for="customFile"
              >Nhập file từ máy tính</label
            >
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn-confirm mr-2">Lưu lại</button>
          <button type="button" class="btn-cancel" data-dismiss="modal">
            Hủy bỏ
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<table
  id="DataList"
  class="table table-bordered table-responsive-md table-hover"
  style="width: 100%;"
>
  <thead>
    <tr>
      <th>STT</th>
      <th>Ma LH</>
      <th>Khoi</th>
      <th>Ten lớp học</th>
      <th>Nam Hoc</th>
      <th>Sĩ Số</th>
      <th>Ngày tạo</th>
      <th>Ngày cập nhật</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($lophocs as $lophoc)
    <tr>
      <td>{{ $loop->index + 1 }}</td>
      <td>LH{{ $lophoc->MaLopHoc }}</td>
      <td>{{ $lophoc->Khoi }}</td>
      <td><a href="/lophoc/xem">{{ $lophoc->TenLop }}</a></td>
      <td>{{ $lophoc->NamHoc }}</td>
      <td>{{ $lophoc->SiSo }}</td>
      <td>{{ $lophoc->created_at }}</td>
      <td>{{ $lophoc->updated_at }}</td>
      <td>
        <div class="dropdown">
          <button class="btn btn-primary mt-n1 dropdown-toggle" type="button" id="action-{{ $lophoc->MaLopHoc }}"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Thao tác
          </button>
          <div class="dropdown-menu" aria-labelledby="action-{{ $lophoc->MaLopHoc }}">
            <a class="dropdown-item" href="/lophoc/edit/{{ $lophoc->MaLopHoc }}">Chỉnh sửa</a>
            <button class="dropdown-item" data-toggle="modal" data-target="#delStudent{{ $lophoc->MaLopHoc }}">
              Xóa
            </button>
          </div>
        </div>
        <div class="modal fade" id="delStudent{{ $lophoc->MaLopHoc }}" tabindex="-1" role="dialog"
          aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa Lớp học</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Bạn có chắc muốn xóa lớp "{{ $lophoc->TenLop }}"?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-confirm mr-2">Xác nhận</button>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Hủy</button>
              </div>
            </div>
          </div>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
