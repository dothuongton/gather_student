<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/16/22
 * Time: 12:06 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    #protected $table = 'students';
    protected  $fillable = [

        'ten_truong',
        'quan_huyen',
        'ma_hs',
        'lop',
        'ho_ten',
        'ngay','thang','nam',
        'gioi_tinh',
        'noi_sinh',
        'dan_toc',
        'ho_khau',
        'sdt',
        'sc_1',
        'sc_2',
        'sc_3',
        'sc_4',
        'sc_total',
        'ghi_chu'


    ];
    public $timestamps = false;
}