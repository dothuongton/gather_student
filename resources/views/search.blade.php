<div class="container">
    <div class="row">
        <div class="col">
            <h4>Tìm Kiếm</h4>
            <form role="search" method="get" id="searchForm" action="/">
                <input type="text" name="studentCode" id="studentCode" placeholder="Nhập mã học sinh...">
                <input type="text" name="studentName" id="studentName" placeholder="Nhập tên">
                <button type="submit" id="btnSearch">Tìm kiếm</button>
            </form>
        </div>
    </div>
    <div class="row">
        <h4>Tìm thấy {{count($sinhVien)}}</h4>
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

                @foreach($sinhVien as $student)
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