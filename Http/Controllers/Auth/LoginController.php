<?php

namespace Modules\Golfbooking\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Golfbooking\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {
        return view('golfbooking::auth.login');
    }

    public function store(LoginRequest $request)
    {
        $username = $this->username($request->email_username);
        if (Auth::attempt([$username => $request->email_username, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function username($email_username)
    {
        return filter_var($email_username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $request->wantsJson() ? new JsonResponse(['message' => 'Logout Successfully', 204]) : redirect('/');
    }
}
