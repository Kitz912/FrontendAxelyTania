<div>
        <h1>TAREAS</h1>
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
                                <LAbel>TAREA</LAbel>
                                <input wire:model="datos.NombreTarea" type="text" placeholder="NOMBRE DE LA TAREA" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('NombreTarea', $errores['errors'])) <b class="text-danger">{{$errores['errors']['NombreTarea'][0]}}</b> @endif
                                <br>
                                <LAbel>DESCRIPCION</LAbel>
                                <input wire:model="datos.Descripcion" type="text" placeholder="DESCRIPCION" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Descripcion', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Descripcion'][0]}}</b> @endif
                                <br>
                                <button type='submit' class="btn btn-success">modificar</button>

                            </div>
                            <div class="col">
                                <LAbel>FECHA DE INICIO</LAbel>
                                <input wire:model="datos.FechaInicio" type="date" placeholder="FECHA DE INICIO" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('FechaInicio', $errores['errors'])) <b class="text-danger">{{$errores['errors']['FechaInicio'][0]}}</b> @endif
                                <br>
                                <LAbel>FECHA DE FIN</LAbel>
                                <input wire:model="datos.FechaFind" type="date" placeholder="FECHA FINAL" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('FechaFind', $errores['errors'])) <b class="text-danger">{{$errores['errors']['FechaFind'][0]}}</b> @endif

                            </div>
                        </div>
                    </div>
                </form>
        </div>
</div>

