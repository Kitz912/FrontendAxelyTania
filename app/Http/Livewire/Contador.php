<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contador extends Component
{
    public $valor = 1;
    public $nombre;
    public function render()
    {
        return view('livewire.contador');
    }
    public function incrementar()
    {
        $this->valor++;
    }
    public function disminuir(){
        if($this->valor<=0){
            $this->valor=0;
        }else{
            $this->valor--;
        }

    }
}
