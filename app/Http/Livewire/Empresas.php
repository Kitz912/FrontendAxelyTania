<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Empresas extends Component
{
    public $idempresas;
    public $listeners = ['eliminarempresa'];
    public $errores = [];
    public $datos = [];

    public function render()
    {
        $response = Http::get('http://127.0.0.1:8000/api/empresas');
        $empresas = $response->json();
        return view('livewire.empresas', compact('empresas'));
        //return view('livewire.empresas');
    }
    public function addempresa(){
        $response = Http::withHeaders([
            'Accept' => 'Application/json'
        ])->post('http://127.0.0.1:8000/api/empresa',$this->datos);
        if ($response->successful()){
            return redirect('/EmpresaIndex');
        } else {
            $this->errores = $response->json();
            //dd($response->json());
        }

        //$empresa = $response->json();
        //dd($this->datos);
        //dd('empresa');
    }
    public function eliminar($id){
        $this->idempresas = $id;
        Http::delete('http://127.0.0.1:8000/api/empresa/eliminar/' . $this->idempresas);
        //dd($this->idtareas);
        return redirect('/EmpresaIndex');
    }
}
