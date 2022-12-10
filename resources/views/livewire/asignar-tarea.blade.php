<div>
    <h1>Asignacion de Tareas</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Asignacion a empleados</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="addEmpTarea">
                <div class="row">
                    <div class="col">
                        <Label>tareasemp</Label>
                        <select wire:model="datos.idEmpleado" class="form-control" name="" id="">
                            <option value="">Empleados</option>
                             @foreach ($empleados as $empleado)
                                <option value="{{ $empleado['id'] }}">{{ $empleado['NombreEmpleado'] }}</option>
                            @endforeach
                        </select>


                        <br>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                    <div class="col">
                        <Label>TAREAS POR ASIGNAR</Label>
                        <select wire:model="datos.idTarea" class="form-control" name="" id="">
                            <option value="">Tareas</option>
                            @foreach ($tareas as $tarea)
                                <option value="{{ $tarea['id'] }}">{{ $tarea['NombreTarea'] }}</option>
                            @endforeach
                        </select>

                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tareas Asignadas</h3>
        </div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre Empleado</th>
                        <th>TAREA ASIGNADA</th>
                        <th>ELIMINAR</th>
                    </tr>
                </thead>
                <tbody>
                       @foreach ($tareasemp as $tareaS)
                        <tr>
                            <td>{{ $tareaS['NombreEmpleado'] }}</td>
                            <td>{{ $tareaS['NombreTarea'] }}</td>
                            <td>
                                <button wire:click='eliminar("{{$tareaS['id']}}")' class="btn btn-danger btn-sm" title="eliminar"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">«</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">»</a></li>
            </ul>
        </div>
    </div>
</div>
