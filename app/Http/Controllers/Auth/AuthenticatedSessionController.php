<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // Otentikasi pengguna
    $request->authenticate();

    // Regenerasi session untuk mencegah session fixation
    $request->session()->regenerate();

    // Ambil pengguna yang sedang login
    $user = Auth::user();

    // Redirect berdasarkan peran pengguna (role)
    switch ($user->role) {
        case 'admin':
            return redirect()->intended('/admin');
        case 'editor':
            return redirect()->intended('/editor');
        case 'user':
            return redirect()->intended('/user');
        default:
            return redirect()->intended('/'); 
        }
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
