<?php

namespace App\Http\Livewire;

use App\Models\Championship;
use Livewire\Component;

class ConfirmAlert extends Component
{
    public $champsId;

    public function render()
    {
        return view('livewire.confirm-alert');
    }

    public function destroy($champsId)
    {
        Championship::find($champsId)->delete();       
    }

    public function reload()
    {
        $champs = championship::searchchampsuser();
        return redirect()->route('championship.index', ['championships' =>  $champs]);
    }
}
