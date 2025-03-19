<?php

namespace Framework\middleware;

class Authorise
{
    /**
     * @return mixed
     */
    public function isAuthenticated()
    {
        return Session::has('user');
    }

    /**
     * @param $role
     * @return void|null
     */
    public function handle($role)
    {
        if ($role === 'guest' && $this->isAuthenticated()) {
            return redirect('/');
        }

        if ($role === 'auth' && !$this->isAuthenticated()) {
            return redirect('/auth/login');
        }
    }
}