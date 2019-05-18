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
            <td colspan="11" style="text-align:left; font-style:italic; font-size:11px !important; padding-top:0px">(Ghi chú về ký tự: <i>Năng lực: </i> <i>T</i>: Tốt, <i>Đ</i>: Đạt, <i>C</i>: Cần cố gắng. <i>Phẩm chất:</i> <i>T</i>: Tốt, <i>Đ</i>: Đạt, <i>C</i>: Cần cố gắng )</td>
        </tr>
        <thead>
        <table class="table table-bordered-outside table-simple" id="tbnomalT">
            <?php
            $i=1;
            $giaovien=\App\GiaoVien::find($id_giaovien);

            ?>
            <caption style="text-align: center; font-size: 15px; font-weight: bold;">Đánh giá định kỳ về năng lực và phẩm chất</caption>
            <tr>
                <th rowspan="2" >STT</th>
                <th rowspan="2" > Họ Tên</th>
                <th colspan="4" style="text-align:center;">Năng Lực</th>
                <th colspan="5" style="text-align:center;" >Phẩm Chất</th>
            </tr>
            <tr>
                <th >Tự phục vụ,tự quản</th>
                <th >Hợp tác</th>
                <th >Tự học và giải quyết vấn đề</th>
                <th>Nhận xét</th>
                <th >Chăm học, chăm làm</th>
                <th >Tự tin, trách nhiệm</th>
                <th >Trung thực, kỉ luật</th>
                <th>Đoàn kết, yêu thương</th>
                <th>Nhận xét</th>
            </tr>
            </thead>
            <tbody>

            @foreach($hocsinh as $hs)
                <?php
                $NL1 = \App\NangLuc::where('id_hocsinh',$hs['id'])->where('id_giaovien', $giaovien['id'])->count();
                ?>
                @if($NL1==0)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$hs['ho_ten']}}</td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td ></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                @else
                    <?php
                    $nangluc=\App\NangLuc::where('id_hocsinh',$hs['id'])->where('id_giaovien',$id_giaovien)->first();
                    $phamchat=\App\PhamChat::where('id_hocsinh',$hs['id'])->where('id_giaovien',$id_giaovien)->first();
                    ?>
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$hs['ho_ten']}}</td>
                        <td >{{$nangluc['muc_do1']}}</td>
                        <td >{{$nangluc['muc_do2']}}</td>
                        <td >{{$nangluc['muc_do3']}}</td>
                        <td >{{$nangluc['nhan_xet']}}</td>
                        <td >{{$phamchat['muc_do1']}}</td>
                        <td >{{$phamchat['muc_do2']}}</td>
                        <td >{{$phamchat['muc_do3']}}</td>
                        <td >{{$phamchat['muc_do4']}}</td>
                        <td >{{$phamchat['nhan_xet']}}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        <a href="giaovien/danhgia" class="btn btn-basic" style="float: right; margin-left: 5px;">Hủy bỏ</a>
        <a href="giaovien/danhgia/nhap/{{$id_lop}}/{{$id_giaovien}}" class="btn btn-primary" style="float: right; ">Cập nhật</a>
    </div>
@endsection