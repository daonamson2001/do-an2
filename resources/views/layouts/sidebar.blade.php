<div class="sidebar" data-color="orange" data-image="../assets/img/full-screen-image-3.jpg">
    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
    <div class="logo">
    </div>

    <div class="sidebar-wrapper">
        <div class="user">
            <div class="info text-center">
                <span>
                    <font color="black">
                        <h5>
                            {{ Session::get('tenSV') }}
                        </h5>
                    </font>
                </span>
            </div>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('index', [session::get('idL'), session::get('idSV')]) }}">
                    <i class="pe-7s-users"></i>
                    <p>Lớp: {{ session::get('idL') }}</p>
                </a>
            </li>
            <li>
                <a
                    href="{{ route('diemsinhvien', [session::get('idL'), session::get('idSV'), session::get('tenSV')]) }}">
                    <i class="pe-7s-smile"></i>
                    <p>Điểm sinh viên</p>
                </a>
            </li>





            {{-- <li>
                <a href="#">
                    <i class="pe-7s-piggy"></i>
                    <p>Thêm điểm thi lại sinh viên</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="pe-7s-date"></i>
                    <p>Lịch công tác</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
