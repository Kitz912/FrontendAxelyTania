<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class AsignarTarea extends Component

{
    public $datos = [];
    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/empleados');
        $empleados = $response->json();
        $response = Http::get('http://127.0.0.1:8000/api/tareas/empresas');
        $tareasemp = $response->json();
        //dd($tareasemp);
        $response = Http::get('http://127.0.0.1:8000/api/tareas');
        $tareas = $response->json();

    return view('livewire.asignar-tarea', compact('tareasemp','tareas', 'empleados'));
        //return view('livewire.asignar-tarea');
    }

    public function addEmpTarea(){

        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ])->post('http://127.0.0.1:8000/api/tarea/empresa',$this->datos);
        if ($response->successful()){
            $this->emit('se creo la tarea');
            return redirect('/TareaAsignadaIndex');
        } else {
            dd($response->json());
        }
    }

    public function eliminar($id){
        Http::delete('http://127.0.0.1:8000/api/tarea/' . $id);
        //dd($id);
        return redirect('/TareaAsignadaIndex');
    }
}
