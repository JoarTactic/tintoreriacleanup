@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-image:url('{{ asset('images/vector2.png') }}')">
                    {{ __('Empleados') }}
                </div>
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('danger'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('danger') }}
                        </div>
                    @endif
                    <a href="{{ route('empleadosCreate') }}" class="btn btn-info" title="Registrar empleado">Registrar</a>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive" id="tableEmpleados">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang("Nombre")</th>
                                <th scope="col">@lang("Email")</th>
                                <th scope="col">@lang("Teléfono")</th>
                                <th scope="col">@lang("Estatus")</th>
                                <th scope="col">@lang("More")</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            ?>
                            @foreach($empleados as $empleado)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $empleado->nombreCompleto }}</td>
                                    <td>{{ $empleado->correo }}</td>
                                    <td>{{ $empleado->telefono }}</td>
                                    <td>
                                        @if($empleado->estatus == 1)
                                            Activo
                                        @else
                                            Inactivo
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('empleadosEdit', [$empleado->id]) }}"
                                           class="btn btn-primary btn-sm" title="@lang("Editar")">@lang("Editar")</a>

                                        <input type="hidden" value="/empleadosDelete/{{ $empleado->id }}" id="urlEliminar"
                                               name="urlEliminar[]">

                                        <button type="button" class="btn btn-danger btn-sm btnEliminar" data-toggle="modal" id="btnEliminar"
                                                data-target="#MyModal" data-dato="{{ $empleado->nombreCompleto }} &nbsp;&nbsp;&nbsp; {{ $empleado->correo }}">
                                            @lang("Eliminar")
                                        </button>
                                    </td>
                                </tr>
                                    <?php
                                    $i++;
                                    ?>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    @parent
    <script>
        $( document ).ready(function() {
            MyDataTable("tableEmpleados");

            $("#tableEmpleados").on('click', ".btnEliminar", function (e){
                var $tr = $(this).closest('tr');
                var deleteUrl = $tr.find('input[id="urlEliminar"]').val();
                var dato = $tr.find('button[id="btnEliminar"]').data("dato");
                MyModal(deleteUrl, dato);
            });
        });
    </script>
@endsection
