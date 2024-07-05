<?php

namespace App\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\Attributes\On;

class MostrarVacantes extends Component
{
    #[On('eliminarVacante' )]
    public function eliminarVacante(Vacante $vacante){
         $vacante->delete();
        // $vacante = Vacante::find($vacante);
        // if($vacante){
             $vacante->estatus = 0;
             $vacante->save();
            // // // $vacante->update();
            // return redirect()->route('home.index')->with(array(
            // "message" => "La editorial se ha eliminado correctamente"));
            
      
    }

    public function render()
    {
        $vacantes = Vacante::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.mostrar-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
