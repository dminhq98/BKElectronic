@extends('vanthu.layout.index')
@section('content')
    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
        <h3>Sửa học sinh</h3>
    </div>
    @if(count($errors)>0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $err)
                {{$err}}<br>
            @endforeach
        </div>
    @endif
    @if(session('thongbao'))
        <div class="alert alert-danger">
            {{session('thongbao')}}
        </div>
    @endif
    @if(session('thanhcong'))
        <div class="alert alert-success">
            {{session('thanhcong')}}
        </div>
    @endif
    <?php
            $id=$hocsinh['id'];
            $u="vanthu/hocsinh/dshocsinh/sua/$id";
            $dshs=\App\DanhSachHS::find($hocsinh['id_danh_sach_hs']);
            $lop=\App\LopHoc::find($dshs['id_lop']);
    ?>
    <div class="panel-body">
        <form role="form" action="{{ url($u) }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="pwd" class="control-label col-sm-4">Họ tên</label>
                <div class="col-sm-6">
                    <input type="text" name="hoten" value="{{$hocsinh['ho_ten']}}" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="pwd" class="control-label col-sm-4">Ngày sinh</label>
                <div class="col-sm-6">
                    <input type="text" name="ngaysinh" value="{{$hocsinh['ngay_sinh']}}" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="pwd" class="control-label col-sm-4">Giới tính</label>
                <div class="col-sm-6">
                    <label class="radio-inline">
                        <input type="radio" name="nam" />Nam
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="nu" />Nữ
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="pwd" class="control-label col-sm-4">Mã học sinh(Nếu có)</label>
                <div class="col-sm-6">
                    <input type="number" min="1" max="{{\App\User::max('id')}}" value="{{$hocsinh['id_taikhoan']}}"  name="mshs" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="pwd" class="control-label col-sm-4">Địa chỉ</label>
                <div class="col-sm-6">
                    <input type="text" name="diachi" value="{{$hocsinh['dia_chi']}}" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <label for="pwd" class="control-label col-sm-4">Lớp</label>
                <div class="col-sm-6">
                    <input type="text" name="lop" value="{{$lop['ten_lop']}}" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div></div>
                <div class="col-sm-offset-4 col-sm-6">
                    <button type="submit" class="btn btn-primary">Lưu lại</button>
                    <button type="reset" class="btn btn-default">Làm mới</button>
                    <a href="vanthu/hocsinh/dshocsinh" class="btn btn-default">Hủy bỏ</a>
                </div>
            </div>
        </form>
    </div>
@endsection

