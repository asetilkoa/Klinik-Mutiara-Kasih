<?php

namespace App\Livewire;

use App\Models\Medis;
use Livewire\Component;

class ShowMedisPage extends Component
{
    public function render()
    {
        $medis = Medis::orderBy('id')->get();

        return view('livewire.show-medis-page',[
            'medis' => $medis
        ]);
    }
}
