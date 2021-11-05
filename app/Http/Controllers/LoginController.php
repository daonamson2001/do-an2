<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function process(Request $request)
    {
        try {
            $email = $request->get('email');
            $password = $request->get('passWord');
            $sinhvien = Student::where('email', $email)->where('passWord', $password)->where('HoatDong', 1)->firstOrFail();
            $request->session()->put('idSV', $sinhvien->idSV);
            $request->session()->put('gioiTinh', $sinhvien->gioiTinh);
            $request->session()->put('tenSV', $sinhvien->tenSV);
            $request->session()->put('idL', $sinhvien->idL);
            $request->session()->put('HoatDong', $sinhvien->HoatDong);
            return view('dashboard');
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'Sai Email hoặc Mật khẩu !');
            $sinhvien = Student::where('email', $email)->where('passWord', $password)->firstOrFail();
            if ($sinhvien->HoatDong == 0) {
                return redirect()->route('login')->with('error', 'Tài khoản của bạn đã bị khóa !');
            }
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        // return view('login');
        return redirect()->route('login');
    }
}