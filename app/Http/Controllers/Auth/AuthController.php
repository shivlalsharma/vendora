<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AuthController extends Controller
{
    function showSignupPage(): View{
        return view('pages.auth.signup');
    }

    function signup(Request $request): RedirectResponse{
        return redirect()->route('signup');
    }

    function showSigninPage(): View{
        return view('pages.auth.signin');
    }

    function signin(Request $request): RedirectResponse{
        return redirect()->route('signin');
    }

    function showForgotPassPage(): View{
        return view('pages.auth.forgot-password');
    }

    function sendOtp(Request $request): RedirectResponse{
        return redirect()->route('send-otp');
    }

    function showVerifyOtpPage(): View{
        return view('pages.auth.verify-otp');
    }

    function verifyOtp(Request $request): RedirectResponse{
        return redirect()->route('verify-otp.submit');
    }

    function showResetPassPage(): View{
        return view('pages.auth.reset-password');
    }

    function resetPass(Request $request): RedirectResponse{
        return redirect()->route('reset-password.submit');
    }

    function logout(Request $request): RedirectResponse{
        return redirect()->route('index');
    }
}
