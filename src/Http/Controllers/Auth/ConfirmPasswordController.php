<?php

namespace App\Http\Controllers\Administrator\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected $redirectTo;
    
    public function redirectTo() {
        return '/' . config('ladmin.prefix', 'administrator');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $guard = config('ladmin.auth.guard', 'web');
        $this->redirectTo = $this->redirectTo();
        $this->middleware("auth:{$guard}");
    }
}
