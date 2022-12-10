<div>
    <button wire:click="incrementar" class="btn btn-success">+</button>
    <button wire:click="disminuir" class="btn btn-danger">-</button>
    <h1>{{$valor}}</h1>
    <h1>Hola mi nombre es: {{$nombre}}</h1>
    <input wire:model='nombre' type="text" class="form-control">

</div>
