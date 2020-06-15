<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title')</title>
    <link
      href="{{ asset('css/bootstrap.min.css') }}"
      type="text/css"
      rel="stylesheet"
    />
    {{--
    <link
      href="{{ asset('css/dataTables.bootstrap.min.css') }}"
      type="text/css"
      rel="stylesheet"
    />
    --}} {{--
    <link
      href="{{ asset('css/dataTables.foundation.css') }}"
      type="text/css"
      rel="stylesheet"
    />
    --}}
    <link
      href="{{ asset('css/jquery.dataTables.min.css') }}"
      type="text/css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" />
  </head>

  <body>
    @component('components.header')
    @endcomponent

    <div class="container my-5">
      @section('content')
      @show
    </div>

    @component('components.footer')
    @endcomponent

    <script
      type="text/javascript"
      src="{{ asset('js/jquery.min.js') }}"
    ></script>
    <script
      type="text/javascript"
      src="{{ asset('js/bootstrap.min.js') }}"
    ></script>
    <script
      type="text/javascript"
      src="{{ asset('js/popper.min.js') }}"
    ></script>
    {{--
    <script
      type="text/javascript"
      src="{{ asset('js/dataTables.bootstrap.min.js') }}"
    ></script>
    --}}
    <script
      type="text/javascript"
      src="{{ asset('js/jquery.dataTables.min.js') }}"
    ></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("#DataList").DataTable({
          aLengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "Tất cả"]
          ],
          iDisplayLength: 10,
          // "bSort": false,
          targets: "no-sort",
          oLanguage: {
            sLengthMenu: "Hiển thị _MENU_ dòng mỗi trang",
            oPaginate: {
              sFirst:
                "<span class='glyphicon glyphicon-step-backward' aria-hidden='true'></span>",
              sLast:
                "<span class='glyphicon glyphicon-step-forward' aria-hidden='true'></span>",
              sNext:
                "<span class='glyphicon glyphicon-triangle-right' aria-hidden='true'></span>",
              sPrevious:
                "<span class='glyphicon glyphicon-triangle-left' aria-hidden='true'></span>"
            },
            sEmptyTable: "Không có dữ liệu",
            sSearch: "Tìm kiếm:",
            sZeroRecords: "Không có dữ liệu",
            sInfo:
              "Hiển thị từ _START_ đến _END_ trong tổng số _TOTAL_ dòng được tìm thấy",
            // "sInfoEmpty" : "Không tìm thấy",
            sInfoFiltered: " (trong tổng số _MAX_ dòng)"
            // "fSort": false,
          }
        });
      });
    </script>
  </body>
</html>
