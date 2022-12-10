<div>
    <div>
        <h1>EMPRESAS</h1>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Registro de tareas</h3>
            </div>
                <form wire:submit.prevent="modificar">

                    <div class="card-body">

                        @if (array_key_exists('message',$errores))
                        <div class="alert alert-danger">
                            <b>{{$errores['message']}}</b>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col">
                                <LAbel>NOMBREEMPRESA</LAbel>
                                <input wire:model="datos.NombreEmpresa" type="text" placeholder="NOMBRE DE LA EMPRESA" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('NombreEmpresa', $errores['errors'])) <b class="text-danger">{{$errores['errors']['NombreEmpresa'][0]}}</b> @endif
                                <br>
                                <LAbel>CIF</LAbel>
                                <input wire:model="datos.CIF" type="text" placeholder="DESCRIPCION" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('CIF', $errores['errors'])) <b class="text-danger">{{$errores['errors']['CIF'][0]}}</b> @endif
                                <br>
                                <button type='submit' class="btn btn-success">modificar</button>

                            </div>
                            <div class="col">
                                <LAbel>LOCALIDAD</LAbel>
                                <input wire:model="datos.Localidad" type="text" placeholder="LOCALIDAD" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Localidad', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Localidad'][0]}}</b> @endif
                                <br>
                                <LAbel>DIRECCION</LAbel>
                                <input wire:model="datos.Direccion" type="text" placeholder="DIRECCION" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Direccion', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Direccion'][0]}}</b> @endif
                                <br>
                                <LAbel>EMAIL</LAbel>
                                <input wire:model="datos.Email" type="text" placeholder="Email" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Email', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Email'][0]}}</b> @endif
                                <br>
                                <LAbel>DIRECCION-WEB</LAbel>
                                <input wire:model="datos.DireccionWeb" type="text" placeholder="DIRECCION-WEB" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('DireccionWeb', $errores['errors'])) <b class="text-danger">{{$errores['errors']['DireccionWeb'][0]}}</b> @endif
                                <br>
                                <LAbel>TELEFONO</LAbel>
                                <input wire:model="datos.Telefono" type="text" placeholder="Telefono" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Telefono', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Telefono'][0]}}</b> @endif
                            </div>
                        </div>
                    </div>
                </form>
        </div>
</div>
</div>
