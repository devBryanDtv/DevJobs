<?php

namespace App\Livewire;

use App\Models\Salario;
use Livewire\Component;
use App\Models\Categoria;
use App\Models\Vacante;
use Illuminate\Support\Carbon;
use Livewire\WithFileUploads;

class EditarVacante extends Component
{
    public $vacante_id;
    public $titulo;
    public $salario;
    public $categoria;
    public $empresa;
    public $ultimo_dia;
    public $descripcion;    
    public $imagen;    
    public $imagen_nueva; //Se registra nuevo atributo

    use WithFileUploads;

    protected $rules = [
        'titulo'=> 'required|string',
        'salario'=> 'required',
        'categoria'=> 'required',
        'empresa'=> 'required',
        'ultimo_dia'=> 'required',
        'descripcion'=> 'required',
        'imagen_nueva'=> 'nullable|image|max:1024', //nullable haga cambios de imagen o no no se4 exige cambios
    ];


        //solo se usa una vez
    public function mount(Vacante $vacante)
    {
        $this->vacante_id = $vacante->id;
        $this->titulo = $vacante->titulo;
        $this->salario = $vacante->salario_id;
        $this->categoria = $vacante->categoria_id;
        $this->empresa = $vacante->empresa;
        $this->ultimo_dia = Carbon::parse(str_replace('/', '-', $vacante->ultimo_dia))->format('Y-m-d');
        $this->descripcion = $vacante->descripcion;
        $this->imagen = $vacante->imagen;
            
    }

    //ACTUALIZA LOS DATOS DE LA VACANTE

    public function editarVacante()
    {
        $datos = $this->validate();

        //si hay una nueva imagen
        if($this->imagen_nueva) {
            $imagen = $this->imagen_nueva->store('public/vacantes');
            $datos['imagen'] = str_replace('public/vacantes/', '', $imagen);
        }
        // encontrar la vacante a editar
        $vacante = Vacante::find($this->vacante_id);

        // asignar los valores instancia los datos en la variable datos
        $vacante->titulo = $datos['titulo'];
        $vacante->salario_id = $datos['salario'];
        $vacante->categoria_id = $datos['categoria'];
        $vacante->empresa = $datos['empresa'];
        $vacante->ultimo_dia = $datos['ultimo_dia'];
        $vacante->descripcion = $datos['descripcion'];
        //se rescribe lo que hay en la BD y se comprueba 
        $vacante->imagen = $datos['imagen'] ?? $vacante->imagen;

        //editar la vacante 
        $vacante->save();

        //redireccionar

        session()->flash('mensaje', 'la vacante se actualizo correctamente');

        return redirect()->route('vacantes.index');
    }


    public function render()
    {
            //Consultar la base de datos

            $salarios = Salario::all();
            $categorias = Categoria::all();
            
        return view('livewire.editar-vacante', [
            'salarios' => $salarios,
            'categorias' => $categorias
        ]);
    }
}
