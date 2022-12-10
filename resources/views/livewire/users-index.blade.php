<div>
<h1>EMPLEADOS</h1>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Registro de empleados</h3>
        </div>
        <div class="card-body">
            @if (array_key_exists('message',$errores))
            <div class="alert alert-danger">
                <b>{{$errores['message']}}</b>
            </div>
            @endif

            <form wire:submit.prevent="guardar">
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
                        <LAbel>ID EMPRESA</LAbel>
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
                        <button type="submit" class="btn btn-primary" style="margin-top: 300px">Registrar</button>                    </div>

                </div>
            </form>


        </div>
</div>
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Empleados</h3>
        </div>

        <div class="card-body">
        <table class="table table-bordered">
        <thead>
        <tr>
        <th style="width: 10px">ID</th>
        <th>ID Empresa</th>
        <th>Nombre</th>
        <th>DNI</th>
        <th>EMAIL</th>
        <th>TELEFONO</th>
        <th>LOCALIDAD</th>
        <th>DIRECCION</th>
        <th>ACCION</th>
        </tr>
        </thead>
        <tbody>

             @foreach ($empleados as $empleado)

            <tr>
                <td>{{$empleado['id']}}</td>
                <td>{{$empleado['idEmpresa']}}</td>
                <td>{{$empleado['NombreEmpleado']}}</td>
                <td>{{$empleado['DNI']}}</td>
                <td>{{$empleado['Email']}}</td>
                <td>{{$empleado['Telefono']}}</td>
                <td>{{$empleado['Localidad']}}</td>
                <td>{{$empleado['Direccion']}}</td>
                <td>
                    <button wire:click='eliminar({{$empleado['id']}})' class="btn btn-danger btn-sm" title="eliminar"><i class="fa fa-trash"></i></button>
                    <a href="UsuariosIndex/{{$empleado['id']}}/editar" class="btn btn-primary btn-sm" title="modificar"><i class="fa fa-edit"></i></a>
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
