@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:aqua;">{{ __('Empleados - edición') }}</div>

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
                        <div class="col-12 col-md-12" align="right">
                            <a href="{{ route('empleados') }}" class="btn btn-dark"
                               title="@lang("Volver al menú")">@lang("Volver al menú")</a>
                            <hr>
                        </div>
                        <form method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="{{ route('empleadosUpdate', ['id' => $empleado->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <label for="nombreCompleto">@lang("Nombre")</label>
                                    <input type="text" class="form form-control" title="@lang("Nombre completo")" required
                                           placeholder="@lang("Nombre completo")" value="{{ $empleado->nombreCompleto }}" name="nombreCompleto"
                                           id="nombreCompleto" minlength="5" maxlength="200">
                                    @error('nombreCompleto')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12">
                                    <label for="telefono">@lang("Teléfono")</label>
                                    <input type="number" class="form form-control" title="@lang("Teléfono")" required
                                           placeholder="@lang("Teléfono")" value="{{ $empleado->telefono }}" name="telefono" id="telefono"
                                            minlength="7" maxlength="10">
                                    @error('telefono')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12">
                                    <label for="correo">@lang("Email")</label>
                                    <input type="email" class="form form-control" title="@lang("Correo electrónico")"
                                           required placeholder="@lang("Correo electrónico")" value="{{ $empleado->correo }}" name="correo"
                                           id="correo" minlength="5" maxlength="320">
                                    @error('correo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12">
                                    <label for="estatus">@lang("Estatus")</label>
                                    <select class="form form-control" name="estatus" id="estatus" title="@lang("Estatus")">
                                        @if($empleado->estatus == 1)
                                            <option value="0">@lang("Inactivo")</option>
                                            <option value="1" selected>@lang("Activo")</option>
                                        @else
                                            <option value="0" selected>@lang("Inactivo")</option>
                                            <option value="1">@lang("Activo")</option>
                                        @endif
                                    </select>
                                    @error('estatus')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12"><br><hr></div>
                                <div class="col-4 col-md-4"></div>
                                <div class="col-4 col-md-4" align="center">
                                    <input type="submit" class="btn btn-success" value="@lang("Guardar")">
                                    <a href="{{ route('empleados') }}" class="btn btn-dark"
                                       title="@lang("Volver al menú")">@lang("Volver al menú")</a>
                                </div>
                                <div class="col-4 col-md-4"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
