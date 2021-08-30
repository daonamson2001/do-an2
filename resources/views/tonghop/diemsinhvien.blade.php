@extends('layouts.layout')
@section('main')
    <div class="main-content">
        <form class="navbar-search-form" role="search">
            <div class="input-group">
                <input type="text" value="{{ $search }}" name='search' class="form-control" placeholder="Search...">
                <span class="input-group-addon"><button><i class="fa fa-search"></i></button></span>
            </div>
        </form>
        <h2>Tên sinh viên : {{ $tenSV }}</h2>
        <table class="table table-hover table-striped">
            <thead>
                <th style="text-align: center">Mã môn học</th>
                <th style="text-align: center">Tên môn học</th>
                <th style="text-align: center">Điểm lí thuyết</th>
                <th style="text-align: center">Điểm thực hành</th>
                <th style="text-align: center">Nhận xét</th>
                <th style="text-align: center">ĐTB môn học</th>
                <th style="text-align: center">Hành động</th>
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
                <?php $bienrong = ''; ?>
                <?php foreach ($diem as $sinhvien): ?>
                <?php $result = count($diem); ?>
                <tr>
                    <td style="text-align: center">{{ $sinhvien->idMH }}</td>
                    <td style="text-align: center">{{ $sinhvien->tenMH }}</td>
                    <td style="text-align: center">
                        @if ($sinhvien->LyThuyet == '')
                            <a style="color:hotpink">{{ $rong }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo0)
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo1 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo125 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo15 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo175 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo2 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo225 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo25 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo275 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo3 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo325 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo35 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo375 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo4 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo425 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo45 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemdo475 )
                            <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh5)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh525)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh55)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh575)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh6)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh625)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh65)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh675)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh7)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh725)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh75)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh775)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh8)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh825)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh85)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh875)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh9)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh925)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh95)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh975)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @elseif($sinhvien->LyThuyet == $diemxanh10)
                            <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                        @endif
                    </td>
                    <td style="text-align: center">
                        @if ($sinhvien->ThucHanh == '')
                            <a style="color:hotpink">{{ $rong }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo0 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo1 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo125 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo15 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo175 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo2 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo225 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo25 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo275 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo3 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo325 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo35 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo375 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo4 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo425 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo45 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemdo475 )
                            <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh5)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh525)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh55)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh575)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh6)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh625)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh65)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh675)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh7)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh725)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh75)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh775)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh8)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh825)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh85)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh875)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh9)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh925)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh95)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh975)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @elseif($sinhvien->ThucHanh == $diemxanh10)
                            <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                        @endif
                    </td>
                    <?php $quamon = 'Qua môn'; ?>
                    <?php $hoclai = 'Thi Lại'; ?>
                    <td style="text-align: center">
                        @if ($sinhvien->LyThuyet == '')
                            @if ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->ThucHanh =='')
                            @if ($sinhvien->LyThuyet == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->LyThuyet =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->LyThuyet =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '0')
                            @if ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '1')
                            @if ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '1.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '1.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '1.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '2')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '2.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '2.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '2.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '3')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '3.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '3.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '3.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '4')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '4.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '4.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '4.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:red">{{ $hoclai }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '5.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '5.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '5.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '6')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '6.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '6.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '6.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '7')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '7.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '7.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '7.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '8')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '8.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '8.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '8.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '9')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '9.25')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '9.5')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '9.75')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @elseif($sinhvien->LyThuyet == '10')
                            @if ($sinhvien->ThucHanh == '0')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif ($sinhvien->ThucHanh == '1')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='1.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='2.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='3.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.25')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.5')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='4.75')
                                <a style="color:red">{{ $hoclai }}</a>
                            @elseif($sinhvien->ThucHanh =='5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='5.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='6.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='7.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='8.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.25')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.5')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='9.75')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @elseif($sinhvien->ThucHanh =='10')
                                <a style="color:#0099FF"> {{ $quamon }}</a>
                            @endif
                        @endif
                    </td>
                    <?php $dtm1 = $sinhvien->LyThuyet; ?>
                    <?php $dtm2 = $sinhvien->ThucHanh; ?>
                    <?php $dtm3 = ($sinhvien->ThucHanh + $sinhvien->LyThuyet) / 2; ?>
                    <td style="text-align: center">
                        @if ($sinhvien->LyThuyet == '')
                            @if ($sinhvien->ThucHanh / 1)
                                {{ $sinhvien->ThucHanh }}
                            @endif
                        @elseif($sinhvien->ThucHanh == '')
                            @if ($sinhvien->LyThuyet / 1)
                                {{ $sinhvien->LyThuyet }}
                            @endif
                        @else
                            {{ $dtm3 }}
                        @endif
                    </td>
                    <td style="text-align: center">
                        <a href="{{ route('diemthilai', [$sinhvien->idL, $sinhvien->tenMH, $sinhvien->idMH]) }}"
                            rel="tooltip" title="Điểm thi lại" class="btn btn-info btn-simple btn-xs">
                            <i class="fa fa-user"></i>
                        </a>
                    </td>
                    {{-- <td>
                        <a href="{{ route('editDiem', [$sinhvien->idSV, $sinhvien->idL, $sinhvien->idMH, $sinhvien->tenMH]) }}"
                            rel="tooltip" title="Sửa điểm" class="btn btn-success btn-simple btn-xs">
                            <i class="fa fa-edit"></i>
                        </a>
                    </td> --}}
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div style="color: red; font-size:18px">
            <?php $nd = 'Hiện điểm đang trống, hay thêm điểm cho sinh viên !'; ?>
            @if ($result == 0)
                {{ $nd }}
            @endif
        </div>
    </div>
@endsection
