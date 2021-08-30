@extends('layouts.layout')
@section('main')
    <div class="main-content">
        <form class="navbar-search-form" role="search">
            <div class="input-group">
                <input type="text" value="{{ $search }}" name='search' class="form-control" placeholder="Search...">
                <span class="input-group-addon"><button><i class="fa fa-search"></i></button></span>
            </div>
        </form>
        <h2>Môn thi lại: {{ $tenMH }}</h2>
        <table class=" table table-hover table-striped">
            <thead>
                <th>Mã học sinh</th>
                <th>Tên học sinh</th>
                <th style="text-align: center">Điểm thi lại lí thuyết</th>
                <th style="text-align: center">Điểm thi lại thực hành</th>
                <th>Nhận xét</th>
                <th colspan="2" style="text-align: center">Hành động</th>
            </thead>
            <tbody>
                {{-- ------------------------ --}}
                {{-- Diem duoi 5 --}}
                <?php $rong = '-'; ?>
                <?php $diemdo0 = 0; ?>
                <?php $diemdo1 = 1; ?>
                <?php $diemdo125 = 1.25; ?>
                <?php $diemdo15 = 1.5; ?>
                <?php $diemdo175 = 1.75; ?>

                <?php $diemdo2 = 2; ?>
                <?php $diemdo225 = 2.25; ?>
                <?php $diemdo25 = 2.5; ?>
                <?php $diemdo275 = 2.75; ?>

                <?php $diemdo3 = 3; ?>
                <?php $diemdo325 = 3.25; ?>
                <?php $diemdo35 = 3.5; ?>
                <?php $diemdo375 = 3.75; ?>

                <?php $diemdo4 = 4; ?>
                <?php $diemdo425 = 4.25; ?>
                <?php $diemdo45 = 4.5; ?>
                <?php $diemdo475 = 4.75; ?>
                {{-- Diem tren 5 --}}
                <?php $diemxanh5 = 5; ?>
                <?php $diemxanh525 = 5.25; ?>
                <?php $diemxanh55 = 5.5; ?>
                <?php $diemxanh575 = 5.75; ?>

                <?php $diemxanh6 = 6; ?>
                <?php $diemxanh625 = 6.25; ?>
                <?php $diemxanh65 = 6.5; ?>
                <?php $diemxanh675 = 6.75; ?>

                <?php $diemxanh7 = 7; ?>
                <?php $diemxanh725 = 7.25; ?>
                <?php $diemxanh75 = 7.5; ?>
                <?php $diemxanh775 = 7.75; ?>

                <?php $diemxanh8 = 8; ?>
                <?php $diemxanh825 = 8.25; ?>
                <?php $diemxanh85 = 8.5; ?>
                <?php $diemxanh875 = 8.75; ?>

                <?php $diemxanh9 = 9; ?>
                <?php $diemxanh925 = 9.25; ?>
                <?php $diemxanh95 = 9.5; ?>
                <?php $diemxanh975 = 9.75; ?>

                <?php $diemxanh10 = 10; ?>
                {{-- ---------------------------- --}}
                <?php $result = 0; ?>
                <?php foreach ($monhoclai as $sinhvien): ?>
                <?php $result = count($monhoclai); ?>
                <tr>
                    <td>{{ $sinhvien->idSV }}</td>
                    <td>{{ $sinhvien->tenSV }}</td>
                    <td style="text-align: center">
                        @if ($sinhvien->ThiLaiLyThuyet == '')
                            <a style="color:hotpink">{{ $rong }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo0 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo1 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo125 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo15 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo175 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo2 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo225 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo25 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo275 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo3 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo325 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo35 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo375 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo4 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo425 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo45 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemdo475 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh5)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh525)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh55)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh575)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh6)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh625)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh65)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh675)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh7)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh725)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh75)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh775)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh8)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh825)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh85)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh875)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh9)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh925)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh95)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh975)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @elseif($sinhvien->ThiLaiLyThuyet == $diemxanh10)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiLyThuyet }}</a>
                        @endif
                    </td>
                    <td style="text-align: center">
                        @if ($sinhvien->ThiLaiThucHanh == '')
                            <a style="color:hotpink">{{ $rong }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo0 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo1 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo125 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo15 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo175 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo2 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo225 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo25 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo275 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo3 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo325 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo35 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo375 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo4 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo425 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo45 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemdo475 )
                            <a style="color:red"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh5)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh525)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh55)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh575)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh6)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh625)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh65)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh675)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh7)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh725)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh75)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh775)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh8)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh825)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh85)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh875)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh9)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh925)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh95)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh975)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @elseif($sinhvien->ThiLaiThucHanh == $diemxanh10)
                            <a style="color:#0099FF"> {{ $sinhvien->ThiLaiThucHanh }}</a>
                        @endif
                    </td>
                    <?php $quamon = 'Qua môn'; ?>
                    <?php $hoclai = 'Học Lại'; ?>
                    <td>
                        @if ($sinhvien->ThiLaiLyThuyet == '')
                            @if ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiThucHanh =='')
                            @if ($sinhvien->ThiLaiLyThuyet == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiLyThuyet =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '0')
                            @if ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '1')
                            @if ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '1.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '1.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '1.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '2')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '2.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '2.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '2.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '3')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '3.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '3.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '3.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '4')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '4.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '4.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '4.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '5.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '5.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '5.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '6')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '6.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '6.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '6.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '7')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '7.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '7.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '7.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '8')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '8.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '8.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '8.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '9')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '9.25')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '9.5')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '9.75')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThiLaiLyThuyet == '10')
                            @if ($sinhvien->ThiLaiThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThiLaiThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThiLaiThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @endif
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
        <div style="color: red; font-size:18px">
            <?php $nd = 'Hiện sinh viên đã qua môn hoặc điểm đang trong quá trình update. Xin lòng quay lại sau !'; ?>
            @if ($result == 0)
                {{ $nd }}
            @endif
        </div>
    </div>
@endsection
