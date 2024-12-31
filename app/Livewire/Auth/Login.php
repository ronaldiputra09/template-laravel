<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    #[Layout('components.layouts.auth')]

    public $username, $password, $remember;

    public function render()
    {
        return view('livewire.auth.login');
    }

    public function login()
    {
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (
            Auth::attempt(['username' => $this->username, 'password' => $this->password], $this->remember)
            || Auth::attempt(['email' => $this->username, 'password' => $this->password], $this->remember)
        ) {
            return redirect()->intended(route('dashboard'));
        }

        session()->flash('error', 'Cek kembali email/username dan password anda');
    }
}
