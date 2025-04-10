<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
   /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$statuses
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, ...$statuses): Response
    {
        // ตรวจสอบว่า user login หรือไม่
        if (!Auth::check()) {
            return redirect()->route('showLoginForm'); // ถ้าไม่ได้ login ให้ไปหน้า login
        }

        $status = Auth::user()->status;

        // ตรวจสอบสถานะของ user ว่าตรงกับ status ที่ส่งเข้ามาหรือไม่
        if (!in_array($status, $statuses)) {
            Auth::logout(); // ถ้า status ไม่ตรงกันก็ให้ logout
            return redirect()->route('showLoginForm')->withErrors(['status' => 'ไม่มีสิทธิ์เข้าถึงระบบ']);
        }

        return $next($request); // ถ้าผ่านการตรวจสอบแล้วก็ให้ดำเนินการต่อ
    }
}
