<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;
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
            $sinhvien = Student::where('email', $email)->where('passWord', $password)->firstOrFail();
            $request->session()->put('idSV', $sinhvien->idSV);
            $request->session()->put('gioiTinh', $sinhvien->gioiTinh);
            $request->session()->put('tenSV', $sinhvien->tenSV);
            $request->session()->put('idL', $sinhvien->idL);

            return view('dashboard');
        } catch (Exception $e) {
            return redirect()->route('login')->with('error', 'Sai Email hoặc Mật khẩu !');
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        // return view('login');
        return redirect()->route('login');
    }
}