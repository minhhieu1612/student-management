@extends('templates.master') @section('title','Danh sách môn học')
@section('content') @component('components.pageTitle') @slot('title') Danh sách
môn học @endslot @endcomponent

<?php //Hiển thị danh sách môn học?>

<a href="/monhoc/taomoi"><button class="btn-create mb-4 mr-2">Thêm mới</button></a>
<!-- <button class="btn-create mb-4">Import</button> -->
<table id="DataList" class="table table-bordered table-responsive-md table-hover">
  <thead>
    <tr>
      <th>STT</th>
      <th>Mã MH</th>
      <th>Tên môn học</th>
      <th>Ngày tạo</th>
      <th>Ngày cập nhật</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php //Vòng lập foreach lấy giá vào bảng?>
    @foreach($monhocs as $monhoc)
    <tr>
      <td>{{ $loop->index + 1 }}</td>
      <td>MH{{ $monhoc->MaMonHoc }}</td>
      <td>
        <a href="/monhoc/xem/{{ $monhoc->MaMonHoc }}">{{ $monhoc->TenMonHoc }}</a>
      </td>
      <td>{{ $monhoc->created_at ? $monhoc->created_at->format('d/m/Y H:i') :'' }}</td>
      <td>{{ $monhoc->updated_at ? $monhoc->updated_at->format('d/m/Y H:i') :'' }}</td>
      <td>
        <div class="dropdown">
          <button class="btn btn-primary mt-n1 dropdown-toggle" type="button" id="action-{{ $monhoc->MaMonHoc }}"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Thao tác
          </button>
          <div class="dropdown-menu" aria-labelledby="action-{{ $monhoc->MaMonHoc }}">
            <a class="dropdown-item" href="/monhoc/sua/{{ $monhoc->MaMonHoc }}">Chỉnh sửa</a>
            {{-- <button
              class="dropdown-item"
              data-toggle="modal"
              data-target="#del{{ $monhoc->MaMonHoc }}"
            >
            Xóa
            </button> --}}
          </div>
        </div>
        <div class="modal fade" id="del{{ $monhoc->MaMonHoc }}" tabindex="-1" role="dialog"
          aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Xóa Học Sinh</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Bạn có chắc muốn xóa môn</p>
                <p class="text-highlight">{{ $monhoc->TenMonHoc }}</p>
                <p>khỏi hệ thống?</p>
              </div>
              <div class="modal-footer">
                <a href="/monhoc/xoa/{{ $monhoc->MaMonHoc }}"><button type="button" class="btn btn-confirm mr-2">
                    Xác nhận
                  </button></a>
                <button type="button" class="btn btn-cancel" data-dismiss="modal">
                  Hủy
                </button>
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
