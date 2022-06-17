<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
//            'ten_truong'     => $row[0],
//            'quan_huyen'    => $row[1],
//            'ma_hs'     => $row[0],
//            'lop'    => $row[1],
//            'ho_ten'     => $row[0],
//            'ngay_sinh'    => $row[1],
//            'thang_sinh'     => $row[0],
//            'nam_sinh'    => $row[1],
//            'gioi_tinh'     => $row[0],
//            'noi_sinh'    => $row[1],
//            'dan_toc'     => $row[0],
//            'ho_khau'    => $row[1],
//            'sdt'    => $row[1],
//            'diem_1'     => $row[0],
//            'diem_2'    => $row[1],
//            'diem_3'     => $row[0],
//            'diem_4'    => $row[1],
//            'diem_5'    => $row[1],
//            'tong_diem' => $row[2],
//            "ghi_chu" =>$row[2]
        ]);

    }

}
