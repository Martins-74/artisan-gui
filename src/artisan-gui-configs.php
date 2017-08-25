<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Use Laravel Debug
    |--------------------------------------------------------------------------
    |
    | This value is to set if you want to use the Laravel variable APP_DEBUG to
    | set the state of Artisan GUI (activated/disable), the options are
    | "yes" to use Laravel APP_DEBUG and "no" to use Artisan GUI Switch.
    |
    */

    'useLaravelDebug' => "yes",

    /*
    |--------------------------------------------------------------------------
    | Artisan GUI Switch
    |--------------------------------------------------------------------------
    |
    | This value IS ONLY USED when useLaravelDebug is set to "no", to determine
    | the state of Artisan GUI (activated/disable), the optios are "on" to
    | activate it and "off" to disable
    |
    */

    'artisanGUISwitch' => "no",

    /*
    |--------------------------------------------------------------------------
    | Password
    |--------------------------------------------------------------------------
    |
    | This value is to set the password used to acess Artisan GUI.
    |
    */

    'password' => "wellthisisthesafestpassword",

];
