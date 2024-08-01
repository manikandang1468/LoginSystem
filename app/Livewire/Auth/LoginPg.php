<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class LoginPg extends Component
{
    public $email = '';

    public $password = '';

    public function render()
    {
        return view('livewire.auth.login-pg');
    }

    /**
     * Handle Auth Redirection
     *
     * @return redirect redirect 'dashboard'
     */
    public function boot()
    {
        if (auth()->user()) {
            $this->redirect('/dashboard', navigate: true);
        }
    }

    /**
     * Handle Login
     *
     * @param string email
     * @param string password
     * @return redirect redirect 'dashboard'
     */
    public function save()
    {
        $cred = $this->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($cred, false)) {
            session(null)->regenerate();
            return $this->redirect('/dashboard', navigate: true);
        }

        $this->addError('email', 'Password Or Email Not Match');
    }
}
