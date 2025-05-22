<?php

namespace App\Livewire;

use App\Models\Borrowings;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileComponent extends Component
{
    public $name, $email, $phone, $password;

    public function render()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login');
        }

        $borrowings = Borrowings::where('user_id', $user->id)->get();

        return view('livewire.profile-component', [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'borrowings' => $borrowings,
        ])->layout('components.layouts.profile');
    }


    public function mount()
    {
        $user = Auth::user();
        if ($user) {
            $this->name = $user->name;
            $this->email = $user->email;
            $this->phone = $user->phone;
        } else {
            return redirect()->route('login');
        }
    }

    public function edit()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
    }

    public function update()
    {
        $user = Auth::user();

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:15',
            'password' => 'nullable',
        ]);

        $user->name = $this->name;
        $user->email = $this->email;
        $user->phone = $this->phone;

        if ($this->password) {
            $user->password = Hash::make($this->password);
        }

        $user->save();

        session()->flash('success', 'Profile updated successfully!');
        return redirect()->route('profile');
    }

    
}
