@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-image:url('{{ asset('images/vector2.png') }}')">
                    {{ __('Dashboard') }}
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

                    <div class="table table-responsive">
                        <table class="table table-striped table-responsive" style="font-size:10px;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Folio</th>
                                    <th scope="col">Fecha registro</th>
                                    <th scope="col">Monto total</th>
                                    <th scope="col">Anticipo</th>
                                    <th scope="col">Total pendiente</th>
                                    <th scope="col">Observaciones</th>
                                    <th scope="col">Fecha entregado</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Correo Cliente</th>
                                    <th scope="col">Teléfono Cliente</th>
                                    <th style="display: none;" scope="col">Empleado</th>
                                    <th scope="col">Estatus</th>
                                    <th scope="col">More</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($ordenes as $k => $orden)
                                    <tr>
                                        <th scope="row">{{ $k+1 }}</th>
                                        <td>{{ $orden->id }}</td>
                                        <td>{{ \App\Librarys\AdditionalMethods::getDataTimeI18n($orden->fecha)." ".date("H:i:s", strtotime($orden->fecha)) }}</td>
                                        <td>{{ $orden->montoTotal }}</td>
                                        <td>{{ $orden->anticipo }}</td>
                                        <td>{{ number_format($orden->totalPendiente, 2) }}</td>
                                        <td>{{ $orden->observaciones }}</td>
                                        <td>{{ $orden->fechaEntregado }}</td>
                                        <td>{{ $orden->nombreCliente }}</td>
                                        <td>{{ $orden->correoCliente }}</td>
                                        <td>{{ $orden->telefonoCliente }}</td>
                                        <td style="display: none;">{{ $orden->nombreEmpleado }}</td>
                                        <td>{{ $orden->nombreEstatus }}</td>
                                        <td>
                                            <a class="btn btn-info btn-sm btn-xs" title="Ver detalles de la orden"
                                                href="/ordenesEdit/{{ $orden->id }}" style="font-size:8px;">
                                                Ver detalles
                                            </a>
                                        </td>
                                    </tr>
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
