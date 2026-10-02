<?php

namespace App\Livewire\Portfolio;

use Livewire\Component;

class Navigation extends Component
{
    public bool $open = false;

    public function close(): void
    {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.portfolio.navigation');
    }
}
