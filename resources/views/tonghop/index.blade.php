@extends('layouts.layout')
@section('main')
    <div class="main-content">
        @foreach ($student as $sinhvien)
            <h2>Mã sinh viên: {{ $sinhvien->idSV }}</h2>
        @endforeach
        <div class="card">
            <table class="table table-hover table-striped">
                <thead>
                    <th style="text-align: center">Mã sinh viên</th>
                    <th style="text-align: center">Tên sinh viên</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">Giới tính</th>
                    <th style="text-align: center">Ngày sinh</th>
                    <th style="text-align: center">Quê quán</th>
                    <th style="text-align: center">Chuyên ngành</th>
                    <th style="text-align: center">Hành động</th>
                </thead>

                <tbody>
                    <?php foreach ($student as $sinhvien): ?>
                    <tr>
                        <td style="text-align: center">{{ $sinhvien->idSV }}</td>
                        <td style="text-align: center">{{ $sinhvien->tenSV }}</td>
                        <td style="text-align: center">{{ $sinhvien->email }}</td>
                        <td style="text-align: center">{{ $sinhvien->gioiTinh == 1 ? 'Nam' : 'Nữ' }}</td>
                        {{-- Giới tính sẽ được sửa qua Student.php nếu chỉnh gioiTinh->GenderName --}}
                        <td style="text-align: center">{{ $sinhvien->ngaySinh }}</td>
                        <td style="text-align: center">{{ $sinhvien->queQuan }}</td>
                        {{-- <td>{{ $sinhvien->tenLop }}</td> --}}
                        <td style="text-align: center">
                            {{ $sinhvien->idCN == 1 ? 'Lập trình máy tính' : 'Quản trị mạng' }}
                        </td>

                        {{-- //route điểm --}}
                        <td style="text-align: center">
                            <a href="{{ route('diemnamhoc', [$sinhvien->idL, $sinhvien->idSV, $sinhvien->tenSV]) }}"
                                rel="tooltip" title="Điểm sinh viên" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-magic"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            {{ $student->appends(['search' => '$search'])->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
