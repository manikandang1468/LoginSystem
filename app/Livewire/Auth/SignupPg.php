<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class SignupPg extends Component
{

    public $name = '';

    public $email = '';

    public $password = '';

    public function render()
    {
        return view('livewire.auth.signup-pg');
    }

    /**
     * Handle Registration
     *
     * @param string name
     * @param string email
     * @param string password
     * @return redirect redirect 'dashboard' or 'login'
     */
    public function save()
    {
        $this->validate([
            'name' => 'required|max:250|alpha',
            'email' => 'required|unique:users,email',
            'password' => [
                'required',
                'string',
                Password::min(8)
                    ->numbers()
                    ->mixedCase(),
            ],
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Session::flash('message', 'Account Created');

        return $this->redirect('/login', navigate: true);
    }
}
