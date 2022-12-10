<div>
    <h1>TAREAS</h1>
    <div class="card">
        <div class="card-header">
            <form wire:submit.prevent="addtarea">
                <h3 class="card-title">Registro de tareas</h3>
                </div>
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
                            <button class="btn btn-success" type="submit">Registrar</button>

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
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tareas Registradas</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                <thead>
                <tr>
                <th style="width: 10px">ID</th>
                <th>TAREA</th>
                <th>DESCRIPCION</th>
                <th>FECHA DE INICIO</th>
                <th>FECHA FINAL</th>
                <th >ACCIONES</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($tareas as $tarea)

                    <tr>
                        <td>{{$tarea['id']}}</td>
                        <td>{{$tarea['NombreTarea']}}</td>
                        <td>{{$tarea['Descripcion']}}</td>
                        <td>{{$tarea['FechaInicio']}}</td>
                        <td>{{$tarea['FechaFind']}}</td>
                        <td>
                            <a href="TareasIndex/{{$tarea['id']}}/editar" class="btn btn-primary btn-sm" title="modificar"><i class="fa fa-edit"></i></a>
                            <button wire:click='eliminar("{{$tarea['id']}}")' class="btn btn-danger btn-sm" title="eliminar"><i class="fa fa-trash"></i></button>
                        </td>
                        </tr>
                    @endforeach


                </tbody>
                </table>
            </div>


        </div>

