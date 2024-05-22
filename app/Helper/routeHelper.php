<?php

namespace App\Helper;

use App\Providers\RouteServiceProvider;

class RouteHelper
{
    public static function getRedirect($role_id)
    {
        switch ($role_id) {
            case config('constants.ROLE_PENGUJI'):
                return redirect()->intended(RouteServiceProvider::PENGUJI);
            case config('constants.ROLE_SANTRI'):
                return redirect()->intended(RouteServiceProvider::SANTRI);
            default:
                // You might want to handle the default case as well
                return redirect()->intended(RouteServiceProvider::HOME);
        }
    }
}
