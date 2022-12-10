<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UsersIndex extends Component

{
    public $idempleados;
    public $listeners = ['eliminarempleado'];
    public $datos = [];
    public $errores = [

    ];


    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/empresas');
        $nombreempresa = $response->json();
        $response = Http::get('http://127.0.0.1:8000/api/empleados');
        $empleados = $response->json();
        //dd($empleados);
        return view('livewire.users-index', compact('nombreempresa','empleados'));
    }

    public function guardar(){
        //dd($this->datos);
        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ])->post('http://127.0.0.1:8000/api/empleado',$this->datos);
        if ($response->successful()){
            return redirect('/UsuariosIndex');
        } else {
            $this->errores = $response->json();
            //dd($response->json());
        }
    }
    public function eliminar($id){
        Http::delete('http://127.0.0.1:8000/api/empleado/' . $id);
        //dd($this->idtareas);
        return redirect('/UsuariosIndex');
    }
}
