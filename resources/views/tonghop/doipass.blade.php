@extends('layouts.layout')
@section('main')
    <div class="main-content">
        <div class="card">
            <form action="{{ route('doipass2', $idSV) }}" method="post">
                @csrf
                @method('PUT')
                <div class="header text-center">Cập nhập mật khẩu</div>
                <div class="content">
                    <div class="form-group" style="position: relative">
                        <label class="control-label">Mật khẩu mới <star>*</star></label>
                        <input class="form-control" name="passWord" type="password" id="nhap-pass1">
                        <a href="javascript:;void(0)" style="position: absolute; right:10px; top: 50%; color: #333"><i
                                class="fa fa-eye"></i></a>
                        <span id="error-nhap-pass1" id="error" hidden></span>
                    </div>
                    <div class="form-group" style="position: relative">
                        <label class="control-label">Nhập lại mật khẩu <star>*</star></label>
                        <input class="form-control" name="passWord" type="password" id="nhap-pass2">
                        <a href="javascript:;void(0)" style="position: absolute; right:10px; top: 50%; color: #333"><i
                                class="fa fa-eye"></i></a>
                        <span id="error-nhap-pass2" id="error" hidden></span>
                    </div>
                    <div class="category">
                        <star>*</star> Là bắt buộc
                    </div>
                </div>
                <div class="footer text-center">
                    <button type="submit" class="btn btn-info btn-fill btn-wd" onclick="return user()">Đồng ý</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $(".form-group a").click(function() {
                let $this = $(this);

                if ($this.hasClass('active')) {
                    $this.parents(".form-group").find('input').attr('type', 'password')
                    $this.removeClass('active');
                } else {
                    $this.parents(".form-group").find('input').attr('type', 'text')
                    $this.addClass('active')
                }
            });
        });

        function user() {
            var vnhappass1 = document.getElementById("nhap-pass1").value;
            var vnhappass2 = document.getElementById("nhap-pass2").value;
            ///////////
            var errnhappass1 = document.getElementById("error-nhap-pass1");
            var errnhappass2 = document.getElementById("error-nhap-pass2");
            ////////////////////////////////
            var dem = 0;
            var regegx1 = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/;
            var checkregegx1 = regegx1.test(vnhappass2);
            ////////////////////////////////
            if (vnhappass2 == "") {
                errnhappass2.innerHTML = " * ";
            } else if (checkregegx1) {
                errnhappass2.innerHTML = "";
                dem++;
            } else {
                errnhappass2.innerHTML = " Mật khẩu tối thiểu 6 ký tự, ít nhất một chữ cái và một số ";
            }
            if (vnhappass1 == "") {
                errnhappass1.innerHTML = " * ";
            } else if (vnhappass1 != vnhappass2) {
                alert('Tên không trùng khớp. Xin vui lòng nhập lại');
            } else {
                errnhappass1.innerHTML = "";
                dem++;
            }
            if (dem == 2) {
                return confirm('Đổi thành thành công. Vui lòng đăng nhập lại.');
            } else {
                alert('Kiểm tra lại thông tin !');
            }
            return false;
        }
    </script>
@endsection
