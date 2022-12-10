<div>
    <h1>EMPLEADOS</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">EDITAR EMPLEADOS</h3>
        </div>
        <form wire:submit.prevent="GuardarCambios">
            <div class="row">
                    <div class="col">
                        {{-- <select class="form-control" name="" id="">
                            <option value="">----empleados----</option>
                            @foreach ($tareas as $tarea)
                                <option value="{{ $tarea['id'] }}">{{ $tarea['NombreTarea'] }}</option>
                            @endforeach
                        </select> --}}
                        <LAbel>Nombre</LAbel>
                        <input wire:model="datos.NombreEmpleado" type="text" placeholder="Nombre" class="form-control" style="width: 450px">
                        @if (array_key_exists('errors',$errores) && array_key_exists('NombreEmpleado', $errores['errors'])) <b class="text-danger">{{$errores['errors']['NombreEmpleado'][0]}}</b> @endif
                        <br>
                        {{-- <select class="form-control" name="" id="" style="width: 450px">
                            <option value="">----EMPRESAS----</option>
                            @foreach ($empleados as $nombreempresa)
                                <option value="{{ $nombreempresa['id'] }}">{{ $nombreempresa['NombreEmpresa'] }}</option>
                            @endforeach
                        </select> --}}
                        <LAbel>IDEMPRESA</LAbel>
                        <input wire:model="datos.idEmpresa" type="text" placeholder="Nombre" class="form-control" style="width: 450px">
                        @if (array_key_exists('errors',$errores) && array_key_exists('idEmpresa', $errores['errors'])) <b class="text-danger">{{$errores['errors']['idEmpresa'][0]}}</b> @endif
                        <br>
                        <LAbel>DNI</LAbel>
                        <input wire:model="datos.DNI" type="text" placeholder="DNI" class="form-control" style="width: 450px">
                        @if (array_key_exists('errors',$errores) && array_key_exists('DNI', $errores['errors'])) <b class="text-danger">{{$errores['errors']['DNI'][0]}}</b> @endif
                        <br>
                        <LAbel>EMAIL</LAbel>
                        <input wire:model="datos.Email" type="text" placeholder="EMAIL" class="form-control" style="width: 450px">
                        @if (array_key_exists('errors',$errores) && array_key_exists('Email', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Email'][0]}}</b> @endif
                        <br>
                    </div>
                    <div class="col">
                        <LAbel>TELEFONO</LAbel>
                        <input wire:model="datos.Telefono" type="number" placeholder="TELEFONO" class="form-control" style="width: 450px">
                        @if (array_key_exists('errors',$errores) && array_key_exists('Telefono', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Telefono'][0]}}</b> @endif
                        <br>
                        <LAbel>LOCALIDAD</LAbel>
                        <input wire:model="datos.Localidad" type="text" placeholder="LOCALIDAD" class="form-control" style="width: 450px">
                        @if (array_key_exists('errors',$errores) && array_key_exists('Localidad', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Telefono'][0]}}</b> @endif
                        <br>
                        <LAbel>DIRECCION</LAbel>
                        <input wire:model="datos.Direccion" type="text" placeholder="DIRECCION" class="form-control" style="width: 450px">
                        @if (array_key_exists('errors',$errores) && array_key_exists('Direccion', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Direccion'][0]}}</b> @endif
                        <br>
                    </div>

                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success">Registrar</button>                    </div>

                </div>
            </form>
    </div>
</div>

