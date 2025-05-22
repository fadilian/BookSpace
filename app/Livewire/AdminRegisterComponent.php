<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AdminRegisterComponent extends Component
{
    public $name, $email, $password;
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin-register-component')->layout('components.layouts.login');
    }

    public function register()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'name.required' => 'Name cannot be empty!',
            'email.required' => 'Email cannot be empty!',
            'password.required' => 'Password cannot be empty!',
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'level' => 'admin'
        ]);
        $this->reset();
        session()->flash('success', 'Register Successfully!');
        return redirect()->route('login');
    }
}
