<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NavigationComponent extends Component
{
    public function render()
    {
        return view('livewire.navigation-component');
    }

    public $userName;

    public function mount()
    {
        $this->userName = Auth::user()->name ?? 'Admin'; // Ganti 'name' dengan kolom nama yang sesuai
    }
}
