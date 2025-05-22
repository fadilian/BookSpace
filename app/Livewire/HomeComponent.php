<?php

namespace App\Livewire;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $layout['title'] = 'Home';
        return view('livewire.home-component')->layout('components.layouts.home')
            ->layoutData($layout);
    }
}
