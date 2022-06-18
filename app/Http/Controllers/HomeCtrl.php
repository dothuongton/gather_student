<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 6/15/22
 * Time: 10:34 PM
 */

namespace App\Http\Controllers;


use App\Models\Students;
use Illuminate\Http\Request;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use function Symfony\Component\Mime\embed;


class HomeCtrl
{
    public function index()
    {
        $students = Students::query()->select('*')->get();
        return view('welcome', ['data'=>$students]);
    }

    public function save(Request $request)
    {
        $file = $request->file('file');

        $fileName = $file->getClientOriginalName();
        if (strstr($fileName, '.') !== '.xlsx') {

        }
        $data = $this->getDataFile($request, [
            'ten_truong', 'quan_huyen', 'ma_hs', 'lop', 'ho_ten', 'ngay', 'thang', 'nam',
            'gioi_tinh', 'noi_sinh', 'dan_toc', 'ho_khau', 'dien_thoai',
            'sc_1', 'sc_2', 'sc_3', 'sc_4', 'sc_5','sc_total', 'ghi_chu'

        ]);

        foreach ($data as $item) {
            $objToSave = [
                'ten_truong' => trim($item['ten_truong']),
                'quan_huyen' => trim($item['quan_huyen']),
                'ma_hs' => trim(preg_replace("/[^A-Za-z0-9\s\s+]/", " ", $item['ma_hs'])),
                'lop' => trim($item['lop']),
                'ho_ten' => trim($item['ho_ten']),
                'ngay' => trim($item['ngay']),
                'thang' => trim($item['thang']),
                'nam' => trim($item['nam']),
                'gioi_tinh' => trim($item['gioi_tinh']),
                'noi_sinh' => trim($item['noi_sinh']),
                'dan_toc' => trim($item['dan_toc']),

                'ho_khau' => trim($item['ho_khau']),
                'sdt' => trim($item['dien_thoai']),
                'sc_total' => trim($item['sc_total']),
//                'tong_diem' => trim($item['tong_diem']),
                'ghi_chu' => trim($item['ghi_chu'])
            ];
        }
//        dd($objToSave);
        $id = Students::create($objToSave);
        if (isset($id)) {
            Alert::success('Cập nhật dữ liêu thành công', 'Done');
        }
        return redirect()->route('GHTK.Home');
    }

    function getDataFile(Request $request, $field = [])
    {
        $file = $request->file('file');
        $name_file = $file->getClientOriginalName();
        $file->move(public_path(), $name_file);
        $path_file = public_path() . '/' . $name_file;
        $reader = ReaderEntityFactory::createReaderFromFile($path_file);
        $reader->open($path_file);
        $objToSave = [];
        foreach ($reader->getSheetIterator() as $ks => $sheet) {
            $data = [];
            $format = [];
            if ($ks < 2) {
                foreach ($sheet->getRowIterator() as $k => $row) {
                    // do stuff with the row
                    $items = $row->toArray();
                    if ($k === 2) {
                        foreach ($items as $item) {
                            if (!isset($format[$item])) {
                                $format[] = $item;
                            }
                        }
                    }
                    if ($k > 2) {
                        foreach ($items as $c => $item) {
                            if (isset($format[$c])) {
                                $format[$c] = trim($format[$c]);
                                $data[$format[$c]] = $item;
                            }
                        }
                        foreach ($field as $f) {
                            $f = trim($f);
                            if (!isset($data[$f])) {
                                return ['code_exists' => 'Không tìm thấy cột ' . $f . ' trong Sheet :"' . $sheet->getName() . '"'];
                            }
                        }
                        $objToSave[] = $data;
                    }
                }
            }
        }
        $reader->close();
        return $objToSave;

    }
    public  function search(Request  $req){
         $sinhVien = Students::where('ho_ten', 'like', '%'.$req->studentCode.'%')->get();
         return  view('welcome',['sinhVien'=>$sinhVien]);
         dd($sinhVien);
    }
}