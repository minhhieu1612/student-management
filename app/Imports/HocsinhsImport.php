<?php

namespace App\Imports;

use App\Hocsinh;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HocsinhsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Hocsinh([
            'HoVaTen' => $row['hovaten'],
            'GioiTinh' => $row['gioitinh'],
            'NgaySinh' => $row['ngaysinh'],
            'DiaChi' => $row['diachi'],
            'QueQuan' => $row['quequan'],
        ]);
    }
}
