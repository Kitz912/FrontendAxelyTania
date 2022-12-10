<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class EditarTareas extends Component
{


    public $errores = [];
    public $datos = [];
    public $idTarea = [];

    public function mount($id){
        $this->idTarea = $id;
        $this->datos = Http::get('http://127.0.0.1:8000/api/tareas/' . $id)->json();
        //dd($this->datos);

    }

    public function render()
    {
        return view('livewire.editar-tareas');
    }

    public function modificar(){
        $response = Http::withHeaders([
            'Accept' => 'Application/json'])->
        put('http://127.0.0.1:8000/api/tarea/modificar/'. $this->idTarea, $this->datos);
        if ($response->successful()) {
            $this->emit('se modifico la tarea');
            return redirect('/TareasIndex');
        } else {
            $this->errores = $response->json();
        }
    }
}
