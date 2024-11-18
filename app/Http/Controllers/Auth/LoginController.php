<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Ubah route setelah login ke dashboard
    
    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'Dosen') {
            return redirect()->route('admin.dashboard');
        }
        return redirect('/login');
    }
    // protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request){
        $this->guard()->logout();
        $request->sessions()->invalidate();
        return $this->loggedOut($request) ?: redirect('/login');
    }

}
