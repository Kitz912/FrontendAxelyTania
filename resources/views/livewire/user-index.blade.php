<div>
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">USUARIOS</h3>
        </div>

        <div class="card-body">
        <table class="table table-bordered">
        <thead>
            @foreach($usuarios as $usuario)
            <tr>
            <th style="width: 10px">{{$usuario['id']}}</th>
            <th>{{$usuario['name']}}</</th>
            <th>{{$usuario['email']}}</</th>
            <th style="width: 40px">Acciones</th>
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
