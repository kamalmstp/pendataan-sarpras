<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Validate the user login request.
     *
     * @param Request $request
     * @return void
     *
     */
    protected function validateLogin(Request $request): void
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /*
     * Change email to username
     * Default laravel is email
     * */
    public function username(): string
    {
        return 'username';
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //    protected $redirectTo = $this->redirectTo();

    protected function redirectTo()
    {
        $redirectPath = RouteServiceProvider::HOME;

        if (auth()->user()->level === User::SD) {
            $redirectPath = route('primary.index');
        } else if (auth()->user()->level === User::SMP) {
            $redirectPath = route('junior.index');
        } else if (auth()->user()->level === User::ADMIN) {
            $redirectPath = route('administrator.index');
        }

        return $redirectPath;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
