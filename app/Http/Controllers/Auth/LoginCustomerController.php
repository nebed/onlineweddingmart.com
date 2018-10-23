<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\RedirectsUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Customer;
use Socialite;
use Session;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginCustomerController extends Controller
{
    use ThrottlesLogins, RedirectsUsers;
    /*
    |--------------------------------------------------------------------------
    | Login Vendor Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    protected $redirectTo = '/user/dashboard';

    public function __construct()
    {
        $this->middleware('guest:customer',['except'=>['logout']]);
    }

    public function showLogin(Request $request)
    {
        return view('customers.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('customer')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) 
        {
            $request->session()->regenerate();

            $this->clearLoginAttempts($request);
            return redirect()->intended(route('customer.dashboard'));
        }

        //return redirect()->back()->withInput($request->only('email', 'remember'));
        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        Auth::guard('customer')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    public function username()
    {
        return 'email';
    }


    protected function sendFailedLoginResponse(Request $request)
    {
        $errors = [$this->username() => trans('auth.failed')];

        if ($request->expectsJson()) {
            return response()->json($errors, 422);
        }

        return redirect()->back()
            ->withInput($request->only($this->username(), 'remember'))
            ->withErrors($errors);
    }

    /*protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $this->clearLoginAttempts($request);

        return $this->authenticated($request, $this->guard('customer')->user())
                ?: redirect()->intended($this->redirectPath());
    }*/

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();

    }

    public function handleProviderCallback()
    {

        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findOrCreateUser($user, 'facebook');
        Auth::guard('customer')->login($authUser, true);
        Session::flash('success','youve been logged in successfully');
        return redirect($this->redirectTo);

    }

    public function findOrCreateUser($user)
    {
        $authUser = Customer::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        return Customer::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'provider' => 'facebook',
            'provider_id' => $user->id,
        ]);
    }
}
