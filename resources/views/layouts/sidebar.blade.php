<div class="sidebar" data-color="orange" data-image="../assets/img/full-screen-image-3.jpg">
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
                    href="{{ route('diemnamhoc', [session::get('idL'), session::get('idSV'), session::get('tenSV')]) }}">
                    <i class="pe-7s-smile"></i>
                    <p>Điểm sinh viên</p>
                </a>
            </li>
        </ul>
    </div>
</div>
