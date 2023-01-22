<?php

namespace App\Http\Livewire\Championship;

use App\Models\Championship;
use Livewire\Component;

class Listing extends Component
{
    

    public function render()
    {
        return view('livewire.championship.listing', [
            'championships' => Championship::searchchampsuser(),
        ]);
    }
}
