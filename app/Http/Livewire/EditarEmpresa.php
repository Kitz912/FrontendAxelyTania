<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EditarEmpresa extends Component
{
    public $errores = [];
    public $datos = [];
    public $idEmpresa = [];

    public function mount($id){
        $this->idEmpresa = $id;
        $this->datos = Http::get('http://127.0.0.1:8000/api/empresas/' . $id)->json();
        //dd($this->datos);

    }

    public function render()
    {

        return view('livewire.editar-empresa');
    }

    public function modificar(){
        $response = Http::withHeaders([
            'Accept' => 'Application/json'])->
        put('http://127.0.0.1:8000/api/empresa/modificar/'. $this->idEmpresa, $this->datos);
        if ($response->successful()) {
            $this->emit('se modifico la empresa');
            return redirect('/EmpresaIndex');
        } else {
            $this->errores = $response->json();
        }
    }
}
