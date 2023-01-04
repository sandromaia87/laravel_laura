<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Championship;
use App\Models\Date_championship;

class ConfirmAlertData extends Component
{
    public $dataId;

    public function render()
    {
        return view('livewire.confirm-alert-data');
    }

    public function destroy($dataId)
    {
        Date_championship::find($dataId)->delete();     
    }
}
