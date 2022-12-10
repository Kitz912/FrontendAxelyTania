<div>
    <h1>EMPRESAS</h1>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de empresas</h3>
            </div>
            <div class="card-body">
                <form wire:submit.prevent="addempresa">
                        <div class="row">
                            <div class="col">
                                <LAbel>CIF</LAbel>
                                <input wire:model="datos.CIF" type="text" placeholder="CIF" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('CIF', $errores['errors'])) <b class="text-danger">{{$errores['errors']['CIF'][0]}}</b> @endif
                                <br>
                                <LAbel>Nombre de la Empresa</LAbel>
                                <input wire:model="datos.NombreEmpresa" type="text" placeholder="NOMBRE DE LA EMPRESA" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('NombreEmpresa', $errores['errors'])) <b class="text-danger">{{$errores['errors']['NombreEmpresa'][0]}}</b> @endif
                                <br>
                                <LAbel>LOCALIDAD</LAbel>
                                <input wire:model="datos.Localidad" type="text" placeholder="LOCALIDAD" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Localidad', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Localidad'][0]}}</b> @endif
                                <br>
                                <br>
                            </div>
                            <div class="col">
                                <LAbel>DIRECCION</LAbel>
                                <input wire:model="datos.Direccion" type="text" placeholder="DIRECCION" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Direccion', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Direccion'][0]}}</b> @endif
                                <br>
                                <LAbel>DIRECCION</LAbel>
                                <input wire:model="datos.DireccionWeb" type="text" placeholder="DIRECCIONWEB" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('DireccionWeb', $errores['errors'])) <b class="text-danger">{{$errores['errors']['DireccionWeb'][0]}}</b> @endif
                                <br>
                                <LAbel>EMAIL</LAbel>
                                <input wire:model="datos.Email" type="text" placeholder="EMAIL" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Email', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Email'][0]}}</b> @endif
                                <br>
                                <LAbel>TELEFONO</LAbel>
                                <input wire:model="datos.Telefono" type="text" placeholder="TELEFONO" class="form-control" style="width: 450px">
                                @if (array_key_exists('errors',$errores) && array_key_exists('Telefono', $errores['errors'])) <b class="text-danger">{{$errores['errors']['Telefono'][0]}}</b> @endif
                                <br>
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary" style="margin-top: 48%">Registrar</button>
                            </div>
                        </div>
                </form>

            </div>
    </div>
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">EMPRESAS REGISTRADAS</h3>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                <thead>
                <tr>
                <th style="width: 10px">ID</th>
                <th>NOMBRE DE LA EMPRESA</th>
                <th>CIF</th>
                <th>LOCALIDAD</th>
                <th>DIRECCION</th>
                <th>EMAIL</th>
                <th>DIRECCION WEB</th>
                <th>TELEFONO</th>
                <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>

                    @foreach ($empresas as $empresa)

                    <tr>
                        <td>{{$empresa['id']}}</td>
                        <td>{{$empresa['NombreEmpresa']}}</td>
                        <td>{{$empresa['CIF']}}</td>
                        <td>{{$empresa['Localidad']}}</td>
                        <td>{{$empresa['Direccion']}}</td>
                        <td>{{$empresa['Email']}}</td>
                        <td>{{$empresa['DireccionWeb']}}</td>
                        <td>{{$empresa['Telefono']}}</td>
                        <td>
                            <a href="EmpresaIndex/{{$empresa['id']}}/editar" class="btn btn-primary btn-sm" title="modificar"><i class="fa fa-edit"></i></a>
                            <button wire:click='eliminar("{{$empresa['id']}}")' class="btn btn-danger btn-sm" title="eliminar"><i class="fa fa-trash"></i></button>
                        </td>
                        </tr>
                    @endforeach


                </tbody>
                </table>
            </div>
        </div>
