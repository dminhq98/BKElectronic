@extends('giaovien.layout.index')
@section('content')
    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
        <div class="semyear-choice">
            <ul>
                <li>
                    <br>
                    <br>
                </li>
            </ul>
        </div>
    </div>
    @if(session('thanhcong'))
        <div class="alert alert-success">
            {{session('thanhcong')}}
        </div>
    @endif
    @if(session('thongbao'))
        <div class="alert alert-danger">
            {{session('thongbao')}}
        </div>
    @endif
    <?php
    $u="giaovien/nhapdiem/$id_lop/$id_giaovien";
    ?>

    <div class="panel-body">
        <tr>
            <td colspan="8" style="text-align:left; font-style:italic; font-size:11px !important; padding-top:0px">(Ghi chú về ký tự: <i>T</i>: Hoàn thành tốt, <i>H</i>: Hoàn thành, <i>C</i>: Chưa hoàn thành )</td>
        </tr>
        <table class="table table-bordered-outside table-simple" id="tbnomalT">
            <?php
            $i=1;
            $giaovien=\App\GiaoVien::find($id_giaovien);
            $mon=\App\MonHoc::find($giaovien['id_mon']);
            ?>
            <caption style="text-align: center; font-size: 15px; font-weight: bold;">{{$mon['ten_mon']}}</caption>
            <thead>
            <tr>
                <th rowspan="2" >STT</th>
                <th rowspan="2" > Họ Tên</th>
                <th colspan="3" style="text-align:center;">Giữa học kỳ I</th><th colspan="3" style="text-align:center;" >Cuối học kỳ I</th>
            </tr>
            <tr>
                <th >Mức độ HT</th>
                <th >Điểm KTDK</th>
                <th >Nhận xét</th>
                <th >Mức độ HT</th>
                <th >Điểm KTDK</th>
                <th >Nhận xét</th>
            </tr>
            </thead>
            <tbody>

            @foreach($hocsinh as $hs)
                <?php
                $bd1 = \App\BangDiemC1::where('id_hocsinh',$hs['id'])->where('id_giaovien', $giaovien['id'])->where('id_mon', $giaovien['id_mon'])->count();
                ?>
                @if($bd1==0)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$hs['ho_ten']}}</td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                    </tr>
                @else
                    <?php
                    $bangdiemc1 = \App\BangDiemC1::where('id_hocsinh',$hs['id'])->where('id_giaovien', $giaovien['id'])->where('id_mon', $giaovien['id_mon'])->first();
                    $giuaki=\App\GiuaKiC1::Where('id_bangdiemc1',$bangdiemc1['id'])->first();
                    $cuoiki=\App\CuoiKiC1::where('id_bangdiemc1',$bangdiemc1['id'])->first();
                    ?>
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$hs['ho_ten']}}</td>
                        <td >{{$giuaki['muc_do']}}</td>
                        <td >{{$giuaki['diem']}}</td>
                        <td >{{$giuaki['nhan_xet']}}</td>
                        <td >{{$cuoiki['muc_do']}}</td>
                        <td >{{$cuoiki['diem']}}</td>
                        <td >{{$cuoiki['nhan_xet']}}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        <a href="giaovien/nhapdiem" class="btn btn-basic" style="float: right; margin-left: 5px;">Hủy bỏ</a>
        <a href="giaovien/nhapdiem/nhap/{{$id_lop}}/{{$id_giaovien}}" class="btn btn-primary" style="float: right; ">Cập nhật</a>
    </div>
@endsection