<?php

namespace App\Livewire;



use Livewire\Component;

class MostrarVacante extends Component
{
    // se define variable en el componente
    public $vacante;
    public function render()
    {
        return view('livewire.mostrar-vacante');
    }
}
