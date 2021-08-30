@extends('layouts.layout')
@section('main')
    <div class="main-content">
        @foreach ($student as $sinhvien)
            <h2>Mã sinh viên: {{ $sinhvien->idSV }}</h2>
        @endforeach
        <div class="card">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Mã sinh viên</th>
                    <th>Tên sinh viên</th>
                    <th>Email</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Quê quán</th>
                    {{-- <th>Lớp</th> --}}
                    <th>Chuyên ngành</th>
                    <th colspan="3" style="text-align: center">Hành động</th>
                </thead>

                <tbody>
                    <?php foreach ($student as $sinhvien): ?>
                    <tr>
                        <td>{{ $sinhvien->idSV }}</td>
                        <td>{{ $sinhvien->tenSV }}</td>
                        <td>{{ $sinhvien->email }}</td>
                        <td>{{ $sinhvien->gioiTinh == 1 ? 'Nam' : 'Nữ' }}</td>
                        {{-- Giới tính sẽ được sửa qua Student.php nếu chỉnh gioiTinh->GenderName --}}
                        <td>{{ $sinhvien->ngaySinh }}</td>
                        <td>{{ $sinhvien->queQuan }}</td>
                        {{-- <td>{{ $sinhvien->tenLop }}</td> --}}
                        <td>{{ $sinhvien->idCN == 1 ? 'Lập trình máy tính' : 'Quản trị mạng' }}</td>

                        {{-- //route điểm --}}

                        <td style="text-align: center">
                            <a href="{{ route('diemsinhvien', [$sinhvien->idL, $sinhvien->idSV, $sinhvien->tenSV]) }}"
                                rel="tooltip" title="Điểm sinh viên" class="btn btn-info btn-simple btn-xs">
                                <i class="fa fa-magic"></i>
                            </a>
                        </td>
                        {{-- <td><a href="#" rel="tooltip" title="Sửa thông tin" class="btn btn-success btn-simple btn-xs">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td> --}}
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            {{ $student->appends(['search' => '$search'])->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection
