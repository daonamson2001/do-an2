<?php

namespace App\Http\Controllers;

use App\Models\Diem;
use App\Models\Diemthilai;
use App\Models\Giaovu;
use App\Models\Namhoc;
use App\Models\Student;
use Illuminate\Http\Request;

class TonghopController extends Controller
{
    public function index(Request $request, $idL, $idSV)
    {
        $search = $request->get('search');
        $student = Student::join('lop', 'sinhvien.idL', '=', 'lop.idL')->select('*')->where('sinhvien.idL', '=', $idL)->where('sinhvien.HoatDong', '=', 1)->where('sinhvien.idSV', '=', $idSV)->where('tenSV', 'LIKE', "%$search%")->paginate(10);
        return view('tonghop.index', ["search" => $search, "student" => $student,]);
    }
    public function diemsinhvien(Request $request, $idL, $idSV, $tenSV, $idNH)
    {
        $search = $request->get('search');
        $diem = Diem::join('sinhvien', 'diem.idSV', '=', 'sinhvien.idSV')
            ->join('monhoc', 'diem.idMH', '=', 'monhoc.idMH')
            ->select('*')
            ->where('diem.idSV', '=', $idSV)
            ->where('diem.idNH', '=', $idNH)
            ->where('sinhvien.HoatDong', '=', 1)
            ->where('tenSV', 'LIKE', "%$search%")
            ->paginate(10);
        return view('tonghop.diemsinhvien', ['tenSV' => $tenSV, 'idL' => $idL, 'search' => $search, 'idSV' => $idSV, 'diem' => $diem, 'idNH' => $idNH,]);
    }
    public function diemnamhoc($idL, $tenSV, $idSV, Request $request)
    {
        $search = $request->get('search');
        $namhoc = Namhoc::all();
        return view('tonghop.diemnamhoc', ['tenSV' => $tenSV, 'idL' => $idL, 'search' => $search, 'idSV' => $idSV, 'namhoc' => $namhoc,]);
    }
    public function diemthilai($idL, $tenMH, Request $request, $idMH)
    {
        $search = $request->get('search');
        $monhoclai = Diemthilai::join('sinhvien', 'diemthilai.idSV', '=', 'sinhvien.idSV')
            ->join('monhoc', 'diemthilai.idMH', '=', 'monhoc.idMH')
            ->select('*')
            ->where('sinhvien.idL', '=', $idL)
            ->where('monhoc.idMH', '=', $idMH)
            ->where('sinhvien.HoatDong', '=', 1)
            ->where('tenSV', 'LIKE', "%$search%")
            ->paginate(10);
        return view('tonghop.diemthilai', ['tenMH' => $tenMH, 'idL' => $idL, 'search' => $search, 'idMH' => $idMH, 'monhoclai' => $monhoclai,]);
    }
    public function doipass($idSV)
    {
        return view('tonghop.doipass', ['idSV' => $idSV]);
    }
    public function doipass2(Request $request, $idSV)
    {
        $password = $request->get('passWord');
        Student::where('idSV', $idSV)->update([
            "passWord" => $password,
        ]);
        return redirect()->route('login');
    }
}