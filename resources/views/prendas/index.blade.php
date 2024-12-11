@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-image:url('{{ asset('images/vector2.png') }}')">
                    {{ __('Catálogo de prendas y sus precios') }}
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
                    <a href="{{ route('prendasCreate') }}" class="btn btn-info" title="Registrar prenda">Registrar</a>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-responsive" id="tablePrendas">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang("Nombre")</th>
                                <th scope="col">@lang("Precio Lavado")</th>
                                <th style="display: none;" scope="col">@lang("Precio por kilo")</th>
                                <th scope="col">@lang("Precio Planchado")</th>
                                <th scope="col">@lang("More")</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $i = 1;
                            ?>
                            @foreach($prendas as $prenda)
                                <tr>
                                    <th scope="row">{{ $i }}</th>
                                    <td>{{ $prenda->nombre }}</td>
                                    <td>{{ $prenda->precioPorPrenda }}</td>
                                    <td style="display: none;">{{ $prenda->precioPorKilo }}</td>
                                    <td>{{ $prenda->precioPlanchado }}</td>
                                    <td>
                                        <a href="{{ route('prendasEdit', [$prenda->id]) }}"
                                           class="btn btn-primary btn-sm" title="@lang("Editar")">@lang("Editar")</a>

                                        <input type="hidden" value="/prendasDelete/{{ $prenda->id }}" id="urlEliminar"
                                               name="urlEliminar[]">

                                        <button type="button" class="btn btn-danger btn-sm btnEliminar" data-toggle="modal" id="btnEliminar"
                                                data-target="#MyModal" data-dato="{{ $prenda->nombre }}">
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
            MyDataTable("tablePrendas");

            $("#tablePrendas").on('click', ".btnEliminar", function (e){
                var $tr = $(this).closest('tr');
                var deleteUrl = $tr.find('input[id="urlEliminar"]').val();
                var dato = $tr.find('button[id="btnEliminar"]').data("dato");
                MyModal(deleteUrl, dato);
            });
        });
    </script>
@endsection
