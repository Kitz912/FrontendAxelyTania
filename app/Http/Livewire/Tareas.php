<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Tareas extends Component
{
    public $idtareas;
    public $listeners = ['eliminar'];
    public $datos = [];
    public $errores = [

    ];
    public function render()
    {
        /*$response = Http::get('http://127.0.0.1:8000/api/empleados');
        $empleados = $response->json();*/
        $response = Http::get('http://127.0.0.1:8000/api/tareas');
        $tareas = $response->json();
        return view('livewire.tareas', compact('tareas'));
    }

    public function addtarea(){
        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ])->post('http://127.0.0.1:8000/api/tarea',$this->datos);
        if ($response->successful()){
            $this->emit('success');
            return redirect('/TareasIndex');
        } else {
            $this->errores = $response->json();
        }
    }

    // public function eliminarTarea($id){
    //     $this->idtareas = $id;
    //     $this->emit('delete', 'Desea eliminar la tarea seleccionada');
    //     // $id = $this->datos['id'];
    //     // $response = Http::withHeaders([
    //     //     'Accept' => 'Application/json'
    //     // ])->delete('http://127.0.0.1:8000/api/tarea/eliminar/',$this->datos);
    //     // if ($response->successful()){
    //     //     return redirect('/TareasIndex');
    //     // } else {
    //     //     $this->errores = $response->json();
    //     // }
    // }

    public function eliminar($id){
        $this->idtareas = $id;
        Http::delete('http://127.0.0.1:8000/api/tarea/eliminar/' . $this->idtareas);
        //dd($this->idtareas);
        return redirect('/TareasIndex');
    }


}
