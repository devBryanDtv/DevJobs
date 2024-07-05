<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Vacante;

class CarruselVacantes extends Component
{
    public function render()
    {

        
        $vacantes = Vacante::all();
        return view('livewire.carrusel-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
