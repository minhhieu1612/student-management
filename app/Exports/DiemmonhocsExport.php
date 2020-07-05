<?php

namespace App\Exports;

use App\Diemmonhoc;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DiemmonhocsExport implements FromQuery, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            [
                'Lớp: ' . $this->lop,
                '',
                'Năm học: ' . $this->namhoc,
            ],
            [
                'Môn: ' . $this->tenmonhoc,
                '',
                'Học kỳ: ' . $this->hocky
            ],
            [
                'Mã Học Sinh',
                'Họ Và Tên',
                'Điểm miệng',
                'Điểm 15p',
                'Điểm 1 tiết',
                'Điểm học kỳ',
                'Điểm tổng kết',
            ]
        ];
    }

    public function __construct($lop, $tenmonhoc, $malop, $mamonhoc, $namhoc, $hocky)
    {
        $this->lop = $lop;
        $this->tenmonhoc = $tenmonhoc;
        $this->malop = $malop;
        $this->mamonhoc = $mamonhoc;
        $this->namhoc = $namhoc;
        $this->hocky = $hocky;
    }

    public function query()
    {
       //return Diemmonhoc::query()->where([['MaMonHoc', $this->mamonhoc],['HocKy', $this->hocky],['NamHoc', $this->namhoc]]);
       return Diemmonhoc::query()->join('hocsinhs','diemmonhocs.MaHocSinh','hocsinhs.MaHocSinh')->select('hocsinhs.MaHocSinh AS MaHocSinh','HoVaTen','DiemMieng','Diem15P','Diem1Tiet','DiemHK','DiemTongHK')->where([['MaMonHoc', $this->mamonhoc],['HocKy', $this->hocky],['NamHoc', $this->namhoc]]);
    }
}
