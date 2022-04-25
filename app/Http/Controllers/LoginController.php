<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function LoginView()
    {
        return view('admin.login');
    }

    public function userLogin(Request $request)
    {


        $email = $request->input('email');
        $user = User::where('email', $email)->first();
        if ($user) {
            if (Hash::check($request->input('password'), $user->password)) {

                if ($request->has('rememberme')) {
                    Auth::loginUsingId($user->id, true);
                } else {
                    Auth::loginUsingId($user->id);
                }

                $request->session()->flash('Success', 'ورود با موفقیت انجام شد');

                return redirect()->route('admin.dashboard');

            } else {
                $request->session()->flash('Error', 'رمز عبور وارد شده صحیح نمی باشد');
            }
        }
        $request->session()->flash('Error', 'این پست الکترونیکی موجود نمی باشد');
        return redirect()->back();

    }
}
