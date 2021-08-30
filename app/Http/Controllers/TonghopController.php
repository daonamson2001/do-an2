<?php

namespace App\Http\Controllers;

use App\Models\Diem;
use App\Models\Diemthilai;
use App\Models\Student;
use Illuminate\Http\Request;

class TonghopController extends Controller
{
    public function index(Request $request, $idL, $idSV)
    {
        $search = $request->get('search');
        $student = Student::join('lop', 'sinhvien.idL', '=', 'lop.idL')->select('*')->where('sinhvien.idL', '=', $idL)->where('sinhvien.idSV', '=', $idSV)->where('tenSV', 'LIKE', "%$search%")->where('idSV', 'LIKE', "%$search%")->paginate(10);
        return view('tonghop.index', ["search" => $search, "student" => $student,]);
    }
    public function diemsinhvien(Request $request, $idL, $idSV, $tenSV)
    {
        $search = $request->get('search');
        $diem = Diem::join('sinhvien', 'diem.idSV', '=', 'sinhvien.idSV')
            ->join('monhoc', 'diem.idMH', '=', 'monhoc.idMH')
            ->select('*')
            ->where('diem.idSV', '=', $idSV)
            ->where('tenSV', 'LIKE', "%$search%")
            ->paginate(10);
        return view('tonghop.diemsinhvien', ['tenSV' => $tenSV, 'idL' => $idL, 'search' => $search, 'idSV' => $idSV, 'diem' => $diem,]);
    }
    public function diemthilai($idL, $tenMH, Request $request, $idMH)
    {
        $search = $request->get('search');
        $monhoclai = Diemthilai::join('sinhvien', 'diemthilai.idSV', '=', 'sinhvien.idSV')
            ->join('monhoc', 'diemthilai.idMH', '=', 'monhoc.idMH')
            ->select('*')
            ->where('sinhvien.idL', '=', $idL)
            ->where('monhoc.idMH', '=', $idMH)
            ->where('tenSV', 'LIKE', "%$search%")
            ->paginate(10);
        return view('tonghop.diemthilai', ['tenMH' => $tenMH, 'idL' => $idL, 'search' => $search, 'idMH' => $idMH, 'monhoclai' => $monhoclai,]);
    }
}