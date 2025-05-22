<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    public $name, $phone, $email, $password;
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.login-component')->layout('components.layouts.login');
    }

    public function proses()
    {
        $this->validate();

        // Cek kredensial login
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();
            $user = Auth::user();

            // Redirect berdasarkan level user
            if ($user->level === 'admin') {
                return redirect()->route('dashboard');
            } elseif ($user->level === 'member') {
                return redirect()->route('homepage');
            }
        }

        // Tambahkan error global jika login gagal
        $this->addError('login_error', 'Email or password is incorrect.');
    }



    public function logout()
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();
        $this->reset();
        return redirect()->route('home');
    }

    public function register()
    {
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'name.required' => 'Name cannot be empty!',
            'phone.required' => 'Phone cannot be empty!',
            'email.required' => 'Email cannot be empty!',
            'password.required' => 'Password cannot be empty!',
        ]);

        User::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'password' => $this->password,
            'level' => 'member'
        ]);
        $this->reset();
        session()->flash('success', 'Register Successfully!');
        return redirect()->route('login');
    }
}

