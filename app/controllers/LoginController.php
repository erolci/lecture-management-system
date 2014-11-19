<?php

class LoginController extends BaseController {

    const AUTH_TYPE_ADMIN = 1;
    const AUTH_TYPE_STUDENT = 2;

    public function login()
    {
        // is login redirect
        if (Auth::admin()->check() || Auth::student()->check()) return Redirect::to('/');

        //view
        return View::make('login.choose');
    }

    public function adminLogin()
    {
        // is login redirect
        if (Auth::admin()->check()) return Redirect::to('/');

        // admin login type
        $data['loginType'] = self::AUTH_TYPE_ADMIN;

        //view
        return View::make('login.index', $data);
    }

    public function studentLogin()
    {
        // is login redirect
        if (Auth::student()->check()) return Redirect::to('/');

        // student login type
        $data['loginType'] = self::AUTH_TYPE_STUDENT;

        //view
        return View::make('login.index', $data);
    }

    public function doLogin()
    {
        // is login redirect
        if (Auth::admin()->check() || Auth::student()->check()) return Redirect::to('/');

        //data
        $data = [];

        //login type
        $loginType = Input::get('type');

        //rules
        $rules =
        [
            'username' => 'Required',
            'password' => 'Required'
        ];

        //custom attributes
        $attributes =
        [
            'username'  => $loginType == self::AUTH_TYPE_ADMIN ? 'Username' : 'Student Number',
            'password'  => 'Password'
        ];

        //validator
        $validator = Validator::make(Input::all(), $rules, [], $attributes);

        //isn't valid
        if ($validator->fails())
        {
            return Redirect::to( $loginType == self::AUTH_TYPE_ADMIN ? 'adminLogin' : 'studentLogin' )->withErrors($validator)->withInput();
        }
        //is valid
        else
        {
            if ($loginType == self::AUTH_TYPE_ADMIN)
            {
                // login attempt
                $userLoginAttempt = Auth::admin()->attempt(['username' => Input::get('username'), 'password' => Input::get('password')]);
            }
            else
            {
                // login attempt
                $userLoginAttempt = Auth::student()->attempt(['code' => Input::get('username'), 'password' => Input::get('password')]);
            }

            // login unsuccessful
            if ($userLoginAttempt == false)
            {
                // redirect login page with errors
                return Redirect::to( $loginType == self::AUTH_TYPE_ADMIN ? 'adminLogin' : 'studentLogin' )->withErrors(['message' => 'Invalid ' . ($loginType == self::AUTH_TYPE_ADMIN ? 'username' : 'student number') . ' or/and password'])->withInput();
            }
            // login successful
            else
            {
                return Redirect::intended( $loginType == self::AUTH_TYPE_ADMIN ? 'admin' : 'student' );
            }
        }
    }

    public function logout()
    {
        // end sessions
        Auth::admin()->logout();
        Auth::student()->logout();

        // redirect to login page
        return Redirect::to('login');
    }

}
