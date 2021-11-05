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
        <div class="content content-full-width">
            {{-- ------------------------ --}}
            <?php $rong = '-'; ?>
            {{-- ----------------------------- --}}
            <div id="icon-nam-nhat" class="tab-pane active">
                <table class="table table-hover table-striped">
                    <thead>
                        <?php $dem = 1; ?>
                        <th style="text-align: center">STT</th>
                        <th style="text-align: center">Mã môn học</th>
                        <th style="text-align: center">Tên môn học</th>
                        <th style="text-align: center">Điểm lí thuyết</th>
                        <th style="text-align: center">Điểm thực hành</th>
                        <th style="text-align: center">Nhận xét</th>
                        <th style="text-align: center">ĐTB môn học</th>
                        <th style="text-align: center">Hành động</th>
                    </thead>
                    <tbody>
                        <?php $result = 0; ?>
                        <?php foreach ($diem as $sinhvien): ?>
                        <?php $result = count($diem); ?>
                        <tr>
                            <td style="text-align: center">&ensp;{{ $dem++ }} </td>
                            <td style="text-align: center">{{ $sinhvien->idMH }}</td>
                            <td style="text-align: center">{{ $sinhvien->tenMH }}</td>
                            <td style="text-align: center">
                                @if ($sinhvien->LyThuyet == '')
                                    <a style="color:hotpink">{{ $rong }}</a>
                                @elseif($sinhvien->LyThuyet==0or$sinhvien->LyThuyet==1or$sinhvien->LyThuyet==2
                                    or$sinhvien->LyThuyet==3or$sinhvien->LyThuyet==4)
                                    <a style="color:red"> {{ $sinhvien->LyThuyet }}</a>
                                @elseif($sinhvien->LyThuyet==5or$sinhvien->LyThuyet==6or$sinhvien->LyThuyet==7
                                    or$sinhvien->LyThuyet==8or$sinhvien->LyThuyet==9or$sinhvien->LyThuyet==10)
                                    <a style="color:#0099FF"> {{ $sinhvien->LyThuyet }}</a>
                                @endif
                            </td>
                            <td style="text-align: center">
                                @if ($sinhvien->ThucHanh == '')
                                    <a style="color:hotpink">{{ $rong }}</a>
                                @elseif($sinhvien->ThucHanh==0or$sinhvien->ThucHanh==1or$sinhvien->ThucHanh==2
                                    or$sinhvien->ThucHanh==3or$sinhvien->ThucHanh==4)
                                    <a style="color:red"> {{ $sinhvien->ThucHanh }}</a>
                                @elseif($sinhvien->ThucHanh==5or$sinhvien->ThucHanh==6or$sinhvien->ThucHanh==7
                                    or$sinhvien->ThucHanh==8or$sinhvien->ThucHanh==9or$sinhvien->ThucHanh==10)
                                    <a style="color:#0099FF"> {{ $sinhvien->ThucHanh }}</a>
                                @endif
                            </td>
                            <?php $quamon = 'Qua môn'; ?>
                            <?php $hoclai = 'Thi Lại'; ?>
                            <td style="text-align: center">
                                @if ($sinhvien->LyThuyet == '')
                                    @if ($sinhvien->ThucHanh == 0 or $sinhvien->ThucHanh == 1 or $sinhvien->ThucHanh == 2 or $sinhvien->ThucHanh == 3 or $sinhvien->ThucHanh == 4)
                                        <a style="color:red">{{ $hoclai }}</a>
                                    @elseif($sinhvien->ThucHanh==5or$sinhvien->ThucHanh==6or$sinhvien->ThucHanh==7
                                        or$sinhvien->ThucHanh==8or$sinhvien->ThucHanh==9or$sinhvien->ThucHanh==10)
                                        <a style="color:#0099FF">{{ $quamon }}</a>
                                    @endif
                                @elseif($sinhvien->ThucHanh =='')
                                    @if ($sinhvien->LyThuyet == 0 or $sinhvien->LyThuyet == 1 or $sinhvien->LyThuyet == 2 or $sinhvien->LyThuyet == 3 or $sinhvien->LyThuyet == 4)
                                        <a style="color:red">{{ $hoclai }}</a>
                                    @elseif($sinhvien->LyThuyet==5or$sinhvien->LyThuyet==6or$sinhvien->LyThuyet==7
                                        or$sinhvien->LyThuyet==8or$sinhvien->LyThuyet==9or$sinhvien->LyThuyet==10)
                                        <a style="color:#0099FF">{{ $quamon }}</a>
                                    @endif
                                @elseif($sinhvien->LyThuyet==0or$sinhvien->LyThuyet==1or$sinhvien->LyThuyet==2or$sinhvien->LyThuyet==3or$sinhvien->LyThuyet==4)
                                    <a style="color:red">{{ $hoclai }}</a>
                                @elseif($sinhvien->LyThuyet==5)
                                    @if ($sinhvien->ThucHanh == 0 or $sinhvien->ThucHanh == 1 or $sinhvien->ThucHanh == 2 or $sinhvien->ThucHanh == 3 or $sinhvien->ThucHanh == 4)
                                        <a style="color:red">{{ $hoclai }}</a>
                                    @elseif($sinhvien->ThucHanh==5or$sinhvien->ThucHanh==6or$sinhvien->ThucHanh==7
                                        or$sinhvien->ThucHanh==8or$sinhvien->ThucHanh==9or$sinhvien->ThucHanh==10)
                                        <a style="color:#0099FF">{{ $quamon }}</a>
                                    @endif
                                @elseif($sinhvien->LyThuyet==6)
                                    @if ($sinhvien->ThucHanh == 0 or $sinhvien->ThucHanh == 1 or $sinhvien->ThucHanh == 2 or $sinhvien->ThucHanh == 3 or $sinhvien->ThucHanh == 4)
                                        <a style="color:red">{{ $hoclai }}</a>
                                    @elseif($sinhvien->ThucHanh==5or$sinhvien->ThucHanh==6or$sinhvien->ThucHanh==7
                                        or$sinhvien->ThucHanh==8or$sinhvien->ThucHanh==9or$sinhvien->ThucHanh==10)
                                        <a style="color:#0099FF">{{ $quamon }}</a>
                                    @endif
                                @elseif($sinhvien->LyThuyet==7)
                                    @if ($sinhvien->ThucHanh == 0 or $sinhvien->ThucHanh == 1 or $sinhvien->ThucHanh == 2 or $sinhvien->ThucHanh == 3 or $sinhvien->ThucHanh == 4)
                                        <a style="color:red">{{ $hoclai }}</a>
                                    @elseif($sinhvien->ThucHanh==5or$sinhvien->ThucHanh==6or$sinhvien->ThucHanh==7
                                        or$sinhvien->ThucHanh==8or$sinhvien->ThucHanh==9or$sinhvien->ThucHanh==10)
                                        <a style="color:#0099FF">{{ $quamon }}</a>
                                    @endif
                                @elseif($sinhvien->LyThuyet==8)
                                    @if ($sinhvien->ThucHanh == 0 or $sinhvien->ThucHanh == 1 or $sinhvien->ThucHanh == 2 or $sinhvien->ThucHanh == 3 or $sinhvien->ThucHanh == 4)
                                        <a style="color:red">{{ $hoclai }}</a>
                                    @elseif($sinhvien->ThucHanh==5or$sinhvien->ThucHanh==6or$sinhvien->ThucHanh==7
                                        or$sinhvien->ThucHanh==8or$sinhvien->ThucHanh==9or$sinhvien->ThucHanh==10)
                                        <a style="color:#0099FF">{{ $quamon }}</a>
                                    @endif
                                @elseif($sinhvien->LyThuyet==9)
                                    @if ($sinhvien->ThucHanh == 0 or $sinhvien->ThucHanh == 1 or $sinhvien->ThucHanh == 2 or $sinhvien->ThucHanh == 3 or $sinhvien->ThucHanh == 4)
                                        <a style="color:red">{{ $hoclai }}</a>
                                    @elseif($sinhvien->ThucHanh==5or$sinhvien->ThucHanh==6or$sinhvien->ThucHanh==7
                                        or$sinhvien->ThucHanh==8or$sinhvien->ThucHanh==9or$sinhvien->ThucHanh==10)
                                        <a style="color:#0099FF">{{ $quamon }}</a>
                                    @endif
                                @elseif($sinhvien->LyThuyet==10)
                                    @if ($sinhvien->ThucHanh == 0 or $sinhvien->ThucHanh == 1 or $sinhvien->ThucHanh == 2 or $sinhvien->ThucHanh == 3 or $sinhvien->ThucHanh == 4)
                                        <a style="color:red">{{ $hoclai }}</a>
                                    @elseif($sinhvien->ThucHanh==5or$sinhvien->ThucHanh==6or$sinhvien->ThucHanh==7
                                        or$sinhvien->ThucHanh==8or$sinhvien->ThucHanh==9or$sinhvien->ThucHanh==10)
                                        <a style="color:#0099FF">{{ $quamon }}</a>
                                    @endif
                                @endif
                            </td>
                            <?php $diemm = ($sinhvien->ThucHanh + $sinhvien->LyThuyet) / 2; ?>
                            <td style="text-align: center" class='tb'>
                                @if ($sinhvien->LyThuyet == '')
                                    {{ $sinhvien->ThucHanh }}
                                @elseif($sinhvien->ThucHanh == '')
                                    {{ $sinhvien->LyThuyet }}
                                @else
                                    {{ $diemm }}
                                @endif
                            </td>
                            <td style="text-align: center">
                                <a href="{{ route('diemthilai', [$sinhvien->idL, $sinhvien->tenMH, $sinhvien->idMH]) }}"
                                    rel="tooltip" title="Điểm thi lại" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-user"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div>
                    <?php $nd = 'Hiện điểm chưa được update !'; ?>
                    @if ($result == 0)
                        <div style="color: red; font-size:16px">
                            {{ $nd }}
                        </div>
                    @else
                        <div style="font-size:18px;">
                            Điểm trung bình năm học:
                            <span id='tbn'></span>
                        </div>
                    @endif
                </div>
                </br>
                {{-- <a href="{{ route('exportDiemSV', [$idSV, $idNH]) }}"><button type="submit"
                        class="btn btn-fill btn-info">Tải
                        điểm sinh viên</button></a> --}}
            </div>
            <script>
                var vTb = document.getElementsByClassName('tb');
                var t = 0;
                for (var j = 0; j < vTb.length; j++) {
                    t = t + parseFloat(vTb[j].innerHTML);
                }
                console.log(t);
                var tbn = t / vTb.length;
                document.getElementById('tbn').innerHTML = tbn;
            </script>
        </div>
    </div>
@endsection
