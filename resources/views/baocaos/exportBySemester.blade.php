<table>
    <tr>
        <td>Học kỳ: {{ $hocky }}</td>
        <td></td>
        <td>Năm học: {{ $namhoc }}</td>
    </tr>
    <tr></tr>
    <thead>
    <tr>
        <th>STT</th>
        <th>Mã LH</th>
        <th>Khối</th>
        <th>Tên lớp học</th>
        <th>Sĩ số</th>
        <th>Số lượng đạt</th>
        <th>Tỷ lệ</th>
    </tr>
    </thead>
    <tbody>
        @foreach($lops ?? [] as $index => $lop)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $lop->MaLopHoc }}</td>
            <td>{{ $lop->Khoi }}</td>
            <td>{{ $lop->TenLop }}</td>
            <td>{{ $lop->SiSo }}</td>
            <td>{{ $dats[$index] }}</td>
            <td {{ ($dats[$index] / (($lop->SiSo == 0) ? 1 : $lop->SiSo)) == 1 ? 'class=text-passed':'' }}>{{ round($dats[$index] / (($lop->SiSo == 0) ? 1 : $lop->SiSo) * 100,0) }}%</td>
          </tr>
        @endforeach
    </tbody>
</table>
