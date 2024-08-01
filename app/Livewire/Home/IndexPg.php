<?php

namespace App\Livewire\Home;

use Livewire\Component;

class IndexPg extends Component
{
    public function render()
    {
        return view('livewire.home.index-pg');
    }

    /**
     * Logout user
     *
     * @return redirect redirect 'login'
     */
    public function logout()
    {
        auth()->logout();
        
        $this->redirect('/login', navigate: true);
    }
}
