<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


use Laravel\Socialite\Facades\Socialite;
use App\User;
use Illuminate\Support\Facades\Redirect;



class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getfacebooklogin()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function getlogout() {
        Auth:$this-> logout();
        return Redirect::to('/');
        
    }

    public function gettwitterlogin()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function getgooglelogin()
    {
        return Socialite::driver('google')->redirect();
    }

    public function getgithublogin()
    {
        return Socialite::driver('github')->redirect();
    }

    public function getlinkedinlogin()
    {
        return Socialite::driver('linkedin')->redirect();
    }
    public function getpinterestlogin()
    {
        return Socialite::driver('pinterest')->redirect();
    }

    public function getinstagramlogin()
    {
        return Socialite::driver('instagram')->redirect();
    }

    public function getdropboxlogin()
    {
        return Socialite::driver('dropbox')->redirect();
    }

}