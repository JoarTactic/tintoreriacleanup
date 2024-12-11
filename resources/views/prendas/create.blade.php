@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:aqua;">{{ __('Prendas - registro') }}</div>

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
                            <a href="{{ route('prendas') }}" class="btn btn-dark"
                               title="@lang("Volver al menú")">@lang("Volver al menú")</a>
                            <hr>
                        </div>
                        <form method="post" enctype="multipart/form-data" accept-charset="UTF-8" action="{{ route('prendasStore') }}">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <label for="nombre">@lang("Nombre")</label>
                                    <input type="text" class="form form-control" title="@lang("Nombre")" required
                                           placeholder="@lang("Nombre")" value="" name="nombre"
                                           id="nombre" minlength="5" maxlength="200">
                                    @error('nombre')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12">
                                    <label for="precioPorPrenda">@lang("Precio por prenda lavada")</label>
                                    <input type="text" class="form form-control" title="@lang("Precio por prenda lavada")" required
                                           placeholder="@lang("Precio por prenda lavada")" value="" name="precioPorPrenda" id="precioPorPrenda"
                                           minlength="1" maxlength="6" oninput="syncPrices(this)">
                                    @error('precioPorPrenda')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div style="display: none;" class="col-12 col-md-12">
                                    <label for="precioPorKilo">@lang("Precio por kilo")</label>
                                    <input type="text" class="form form-control" title="@lang("Precio por kilo")" required
                                           placeholder="@lang("Precio por kilo")" value="" name="precioPorKilo" id="precioPorKilo"
                                           minlength="1" maxlength="6" readonly>
                                    @error('precioPorKilo')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <script>
    function syncPrices(input) {
        const precioPorKilo = document.getElementById('precioPorKilo');
        precioPorKilo.value = input.value;
    }
</script>
                                <div class="col-12 col-md-12">
                                    <label for="precioPlanchado">@lang("Precio por prenda planchada")</label>
                                    <input type="text" class="form form-control" title="@lang("Precio por prenda planchada")" required
                                           placeholder="@lang("Precio por prenda planchada")" value="" name="precioPlanchado" id="precioPlanchado"
                                           minlength="1" maxlength="6">
                                    @error('precioPlanchado')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-12"><br><hr></div>
                                <div class="col-4 col-md-4"></div>
                                <div class="col-4 col-md-4" align="center">
                                    <input type="submit" class="btn btn-success" value="@lang("Guardar")">
                                    <a href="{{ route('prendas') }}" class="btn btn-dark"
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
