@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-image:url('{{ asset('images/vector2.png') }}')">
                    {{ __('Clientes') }}
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
                    <a href="{{ route('clientesCreate') }}" class="btn btn-info" title="Registrar cliente">Registrar</a>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive" id="tableClientes">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang("Nombre")</th>
                                <th scope="col">@lang("Email")</th>
                                <th scope="col">@lang("Teléfono")</th>
                                <th scope="col">@lang("More")</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            ?>
                            @foreach($customer as $cliente)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $cliente->nombreCompleto }}</td>
                                    <td>{{ $cliente->correo }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>
                                        <a href="{{ route('clientesEdit', [$cliente->id]) }}"
                                           class="btn btn-primary btn-sm" title="@lang("Editar")">@lang("Editar")</a>
                                        <input type="hidden" value="/clientesDelete/{{ $cliente->id }}" id="urlEliminar"
                                               name="urlEliminar[]">
                                        <button type="button" class="btn btn-danger btn-sm btnEliminar" data-toggle="modal" id="btnEliminar"
                                                data-target="#MyModal" data-dato="{{ $cliente->nombreCompleto }} &nbsp;&nbsp;&nbsp; {{ $cliente->correo }}">
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
            MyDataTable("tableClientes");

            $("#tableClientes").on('click', ".btnEliminar", function (e){
                var $tr = $(this).closest('tr');
                var deleteUrl = $tr.find('input[id="urlEliminar"]').val();
                var dato = $tr.find('button[id="btnEliminar"]').data("dato");
                MyModal(deleteUrl, dato);
            });
        });
    </script>
@endsection
