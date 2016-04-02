<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use App\Services\Access\Traits\ConfirmUsers;
use App\Services\Access\Traits\UseSocialite;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Repositories\Frontend\User\UserContract;
use App\Services\Access\Traits\AuthenticatesAndRegistersUsers;

/**
 * Class AuthController
 * @package App\Http\Controllers\Frontend\Auth
 */
class AuthController extends Controller
{

    use AuthenticatesAndRegistersUsers, ConfirmUsers, ThrottlesLogins, UseSocialite;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Where to redirect users after they logout
     *
     * @var string
     */
    protected $redirectAfterLogout = '/';

    /**
     * @param UserContract $user
     */
    public function __construct(UserContract $user)
    {
        $this->user = $user;
    }
}