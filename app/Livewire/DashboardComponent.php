<?php

namespace App\Livewire;

use App\Models\Books;
use App\Models\Borrowings;
use App\Models\Returns;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $layout['title'] = "Dashboard BookSpace";
        $data['member'] = User::where('level', 'member')->count();
        $data['books'] = Books::count();
        $data['borrowings'] = Borrowings::where('status' , 'borrowed')->count();
        $data['returns'] = Returns::where('penalty', '!=', 0)->count();
        return view('livewire.dashboard-component', $data)->layoutData($layout);
    }

    public function mount()
    {
        // Ambil data user yang login
        $user = Auth::user();

        // Isi properti dengan data user
        $this->name = $user->name;
    }
}
