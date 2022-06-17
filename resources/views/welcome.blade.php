<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous" />
    <title>Tìm kiếm sinh </title>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    <style>
        th,td{
            font-size:9px;
        }
    </style>
</head>

<body>
@include('sweetalert::alert')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <h5 class="mt-5">TRA CỨU THÔNG TIN SINH </h5>
            <img src="img/ghtk_logo.png" width="250" height="250" alt="logo">
            <form class="d-flex justify-content-center mt-3" method="post" action="{{route("GHTK.upload")}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <!-- <label for="exampleFormControlFile1">Example file input</label> -->
                    <input name="file"  type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button class="d-block" style="height: 30px;margin-left: -100px;" type="submit"> Import </button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col">
            inout
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th>STT</th>
                    <th>Trường tiểu học</th>
                    <th>Quận/Huyện</th>
                    <th>Mã Học Sinh</th>
                    <th>Lớp</th>
                    <th>Họ và Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Giới tính</th>
                    <th>Nơi sinh</th>
                    <th>Dân tộc</th>
                    <th>Hộ khẩu thường trú</th>
                    <th>Điện thoại liên hệ</th>
                    <th>Tổng điểm</th>
                    <th>Ghi chú</th>
                </tr>
                </thead>
                <tbody>

                @foreach($data as $student)
                    {{--@dd($student->ngay.'-'.$student->thang.'-'.$student->nam)--}}
                    <tr>

                        <td>{{$student->id}}</td>
                        <td>{{$student->ten_truong}}</td>
                        <td>{{$student->quan_huyen}}</td>
                        <td>{{$student->ma_hs}}</td>
                        <td>{{$student->lop}}</td>
                        <td>{{$student->ho_ten}}</td>
                        {{--<td></td>--}}
                        <td>{{$student->ngay.'/'.$student->thang.'/'.$student->nam}}</td>
                        <td>{{$student->gioi_tinh}}</td>
                        <td>{{$student->noi_sinh}}</td>
                        <td>{{$student->dan_toc}}</td>
                        <td>{{$student->ho_khau}}</td>
                        <td>{{$student->sdt}}</td>
                        <td>{{$student->sc_total}}</td>
                        <td>{{$student->ghi_chu}}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
    </div>
</div>
<footer style="background-color: #1a202c;color: #fff;padding: 10px 0px">
    <p class="d-flex justify-content-center">&copy;&ensp;masterdev</p>
</footer>
</body>

</html>