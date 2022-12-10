<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EditarEmpleados extends Component
{

    public $errores = [];
    public $datos = [];
    public $idEmpleado = [];

    public function mount($id){
        $this->idEmpleado = $id;
        $this->datos = Http::get('http://127.0.0.1:8000/api/empleados/' . $id)->json();
    }
    public function render()
    {
        return view('livewire.editar-empleados');
    }
    public function GuardarCambios(){
        $response = Http::withHeaders([
            'Accept' => 'Application/json'])->
        put('http://127.0.0.1:8000/api/empleado/'. $this->idEmpleado, $this->datos);
        if ($response->successful()) {
            //$this->emit('se modifico la empresa');
            return redirect('/UsuariosIndex');
        } else {
            $this->errores = $response->json();
        }
    }
}
