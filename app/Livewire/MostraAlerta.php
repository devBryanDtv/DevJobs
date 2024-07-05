<?php

namespace App\Livewire;

use Livewire\Component;

class MostraAlerta extends Component
{

    public $message;

    public function render()
    {
        return view('livewire.mostra-alerta');
    }
}
