@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-image:url('{{ asset('images/vector2.png') }}')">
                        {{ __('Ordenes') }}
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
                        {{--<a href="{{ route('empleadosCreate') }}" class="btn btn-info" title="Registrar orden">Registrar</a>--}}
                        <form method="POST" action="{{ route('setOrden') }}" enctype="multipart/form-data"
                              accept-charset="UTF-8" id="formGuardaOrden" name="formGuardaOrden">
                            @csrf
                            <label for="idCliente" style="color:blue;">Cliente:</label>
                            <select class="form form-control idCliente" id="idCliente" name="idCliente" required>
                                <option value="0" disabled selected>Seleccione un cliente</option>
                                @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombreCompleto }}
                                        / {{ $cliente->correo }} / {{ $cliente->telefono }}</option>
                                @endforeach
                            </select>
                            <label for="anticipo">Anticipo:</label>
                            <input type="text" class="form form-control numeroDecimal" name="anticipo" id="anticipo"
                                title="Anticipo" placeholder="Ingrese la cantidad de anticipo" style="width:100%;">
                            <hr>
                            <div class="table-responsive">
                                <table class="table table-striped table-responsive" id="tableOrdenes"
                                       style="font-size:12px;">
                                    <tr>
                                        <th style="width:5%;"></th>
                                        <th style="width:20%;"></th>
                                        <th style="width:5%;"></th>
                                        <th style="width:15%;"></th>
                                        <th style="width:15%;"></th>
                                        <th style="width:10%;"></th>
                                        <th style="width:15%;"></th>
                                        <th style="width:15%;"></th>
                                    </tr>
                                    <tr style="background-color:#ffb9e9;">
                                        <th colspan="4" style="width:100%;">
                                            
                                        </th>
                                        <th colspan="2" style="width:100%;">
                                            <div align="right">
                                                <input type="submit" name="btnGuardar" class="btn btn-info btn-sm" value="Registrar">
                                            </div>
                                        </th>
                                        <th colspan="2" style="width:100%;">
                                            <div align="right">
                                                <input type="submit" name="btnGuardarEditar" class="btn btn-primary btn-sm" value="Agregar más">
                                            </div>
                                        </th>
                                    </tr>
                                    <?php $i = 1; ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $i; ?>
                                            <input type="hidden" name="indice[0]" id="indice" value="0">
                                        </th>
                                        <td>
                                            @lang("Prenda")<br>
                                            <select class="form form-control idPrenda" id="idPrenda" name="idPrenda[0]"
                                                    required>
                                                <option value="0" disabled selected>Seleccione una opción</option>
                                                @foreach($prendas as $prenda)
                                                    <option value="{{ $prenda->id }}">{{ $prenda->nombre }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td>
                                            @lang("Lavar")<br>
                                            <input type="checkbox" value="0" id="lavadoo"
                                                   title="Activar lavado" checked>
                                            <input type="hidden" id="lavado" name="lavado[0]" value="1">
                                            @lang("Planchar")<br>
                                            <input type="checkbox" value="0" id="planchadoo"
                                                   title="Activar planchado">
                                            <input type="hidden" id="planchado" name="planchado[0]" value="0">
                                        </td>
                                        <td>
                                            @lang("Precio Lavado")<br>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control numeroDecimal"
                                                       aria-label="Amount (to the nearest dollar)"
                                                       id="precioPorPrenda" name="precioPorPrenda[0]"
                                                       title="Precio por prenda (Lavado)"
                                                       placeholder="Lavado" readonly>
                                            </div>
                                        </td>
                                        <td >
                                            @lang("Precio Planchado")<br>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control numeroDecimal"
                                                       aria-label="Amount (to the nearest dollar)"
                                                       id="precioPlanchado" name="precioPlanchado[0]"
                                                       title="Precio por prenda (Planchado)"
                                                       placeholder="Planchado" readonly>
                                            </div>
                                        </td>
                                        <td style="display: none;">
                                            @lang("Precio por kilos")<br>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form-control numeroDecimal"
                                                       aria-label="Amount (to the nearest dollar)"
                                                       id="precioPorKilo" name="precioPorKilo[0]" title="Precio por kilo (Lavado)"
                                                       placeholder="Precio por kilo (Lavado)">
                                            </div>
                                        </td>
                                        <td>
                                            @lang("Piezas a lavar")<br>
                                            <input type="number" id="piezas" name="piezas[0]"
                                                   title="Cantidad de prendas (Lavado)"
                                                   placeholder="Cantidad de prendas (Lavado)" value="0" style="width:60px;">
                                                   @lang("Piezas a planchar")<br>
                                            <input type="number" id="piezasPlanchadas" name="piezasPlanchadas[0]"
                                                   title="Cantidad de prendas (Planchado)"
                                                   placeholder="Cantidad de prendas (Planchado)"
                                                   value="0" readonly style="width:60px;">
                                        </td>
                                        <td style="display: none;">
                                            <label for="kilos">@lang("peso en KG")<br></label>
                                            <select id="kilos" name="kilos[0]" class="form form-control select2"
                                                title="Cuantos kilos pesa la ropa">
                                                <option value="0.5">0.5</option>
                                            </select>
                                            <label for="tipoCobro">@lang("Tipo de cobro")<br></label>
                                            <select id="tipoCobro" name="tipoCobro[0]" class="form form-control select2"
                                                title="Tipo de cobro">
                                                <option value="1">Por piezas (por prenda)</option>
                                                <option value="2">Por kilo</option>
                                            </select>
                                        </td>
                                        <td>
                                            @lang("Subtotal Lavado")
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form form-control numeroDecimal totalTotal" id="subTotalLavado"
                                                       name="subTotalLavado[0]" value="0">
                                            </div>
                                        </td>
                                        <td>
                                            @lang("Subtotal Planchado")
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">$</span>
                                                <input type="text" class="form form-control numeroDecimal totalTotal" id="subTotalPlanchado"
                                                       name="subTotalPlanchado[0]" value="0">
                                            </div>
                                        </td>
                                        <td style="display: none;">
                                            <label for="tipoCobroPlanchado">@lang("Tipo de cobro")<br></label>
                                            <select id="tipoCobroPlanchado" name="tipoCobroPlanchado[0]" class="form form-control select2"
                                                    title="Tipo de cobro planchado">
                                                <option value="1">Por piezas (por prenda)</option>
                                                <option value="6">Promoción media docena</option>
                                                <option value="12">Promoción docena</option>
                                            </select>
                                        </td>
                                    </tr>
                                    
                                    <tr style="background-color:#cbd5e0;">
                                        <th colspan="6" align="center">
                                            <label for="observaciones">@lang("Observaciones generales")</label><br>
                                            <textarea title="Observaciones generales" placeholder="Observaciones generales"
                                                      id="observaciones" name="observaciones" style="width:100%;"></textarea>
                                        </th>
                                        <th colspan="1" align="right">
                                            <div align="right">
                                                <label>Total:</label>
                                            </div>
                                        </th>
                                        <th colspan="1" style="width:100%;">
                                            <div style="width:100%;">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text">$</span>
                                                    <input type="text" class="form form-control numeroDecimal"
                                                           width="100%;" id="totalTotal" name="totalTotal" readonly value="0">
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        $(document).ready(function () {

            /**********************************  LAVADO  ****************************************/

            $("#tableOrdenes").on('change', "#lavadoo", function () {
                var $tr = $(this).closest('tr');
                var lavado = $tr.find('input[id="lavadoo"]');
                if (lavado.is(':checked')) {
                    $tr.find('input[id="lavado"]').val("1");

                    $tr.find('input[id="precioPorPrenda"]').removeAttr("readonly");

                    $tr.find('input[id="precioPorKilo"]').removeAttr("readonly");

                    $tr.find('input[id="piezas"]').removeAttr("readonly");
                    $tr.find('input[id="piezas"]').val(0);
                } else {
                    $tr.find('input[id="lavado"]').val("0");

                    $tr.find('input[id="precioPorPrenda"]').attr("readonly", true);

                    $tr.find('input[id="precioPorKilo"]').attr("readonly", true);

                    $tr.find('input[id="piezas"]').attr("readonly", true);
                    $tr.find('input[id="piezas"]').val(0);

                    calculaSubTotalLavado($tr);
                    sumaTotalTotales();
                }
            });

            $("#tableOrdenes").on('change', "#idPrenda", function () {
                var $tr = $(this).closest('tr');
                var $prev = $tr.prev();
                var $next = $tr.next();
                var idPrenda = $tr.find('select[id="idPrenda"]').val();

                getPrendas(idPrenda, $tr, $next, $prev);
            });

            async function getPrendas(idPrenda, $tr, $next, $prev) {
                let url = "/getPrendas/" + idPrenda;
                const response = await fetch(url, {
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    //body: formData
                });
                const data = await response.json();
                $tr.find('input[id="precioPorPrenda"]').val(data.precioPorPrenda);
                $tr.find('input[id="precioPorKilo"]').val(data.precioPorKilo);
                //$next.find('input[id="precioPlanchado"]').val(data.precioPlanchado);
                $tr.find('input[id="precioPlanchado"]').val(data.precioPlanchado);

                calculaSubTotalLavado($tr);
            }

            $(".idPrenda").select2();
            $(".idCliente").select2();
            $("#kilos").select2();
            $("#tipoCobroPlanchado").select2();
            $("#tipoCobro").select2();

            $("#tableOrdenes").on('change', "#piezas", function () {
                var $tr = $(this).closest('tr');
                var piezas = $tr.find('input[id="piezas"]');
                if (piezas.val() <= 0 || piezas.val() == null || piezas.val() == undefined || piezas.val() === undefined) {
                    piezas.val("0");
                }

                calculaSubTotalLavado($tr);
            });

            $("#tableOrdenes").on('change', "#precioPorPrenda", function () {
                var $tr = $(this).closest('tr');
                var precioPorPrenda = $tr.find('input[id="precioPorPrenda"]');
                if (precioPorPrenda.val() <= 0) {
                    precioPorPrenda.val("0");
                }

                calculaSubTotalLavado($tr);
            });

            $("#tableOrdenes").on('change', "#precioPorKilo", function () {
                var $tr = $(this).closest('tr');
                var precioPorKilo = $tr.find('input[id="precioPorKilo"]');
                if (precioPorKilo.val() <= 0) {
                    precioPorKilo.val("0");
                }

                calculaSubTotalLavado($tr);
            });

            $("#tableOrdenes").on('change', "#tipoCobro", function () {
                var $tr = $(this).closest('tr');
                calculaSubTotalLavado($tr);
            });

            $("#tableOrdenes").on('change', "#kilos", function () {
                var $tr = $(this).closest('tr');
                calculaSubTotalLavado($tr);
            });

            function calculaSubTotalLavado($tr){
                var precioPorPrenda = $tr.find('input[id="precioPorPrenda"]');
                var precioPorKilo = $tr.find('input[id="precioPorKilo"]');
                var piezas = $tr.find('input[id="piezas"]');
                var kilos = $tr.find('select[id="kilos"]');
                var tipoCobro = $tr.find('select[id="tipoCobro"]');
                var subTotalLavado = 0;

                if(piezas.val() == 0){
                    $tr.find('input[id="subTotalLavado"]').val(0);
                    return true;
                }

                if(tipoCobro.val() == 1){//Cobro por piezas
                    subTotalLavado = precioPorPrenda.val() * piezas.val();
                }else if(tipoCobro.val() == 2){//Cobro por kilo
                    subTotalLavado = precioPorKilo.val() * kilos.val();
                }
                subTotalLavado = subTotalLavado.toFixed(2);
                $tr.find('input[id="subTotalLavado"]').val(subTotalLavado);
                sumaTotalTotales();
            }
            /**********************************  PLANCHADO  ****************************************/

            $("#tableOrdenes").on('change', "#planchadoo", function () {
                var $tr = $(this).closest('tr');
                var planchado = $tr.find('input[id="planchadoo"]');
                if (planchado.is(':checked')) {
                    $tr.find('input[id="planchado"]').val("1");

                    $tr.find('input[id="precioPlanchado"]').removeAttr("readonly");

                    $tr.find('input[id="piezasPlanchadas"]').removeAttr("readonly");
                    $tr.find('input[id="piezasPlanchadas"]').val(0);

                    $tr.find('input[id="subTotalPlanchado"]').removeAttr("readonly");
                    $tr.find('input[id="subTotalPlanchado"]').val(0);

                } else {
                    $tr.find('input[id="planchado"]').val("0");

                    $tr.find('input[id="precioPlanchado"]').attr("readonly", true);

                    $tr.find('input[id="piezasPlanchadas"]').attr("readonly", true);
                    $tr.find('input[id="piezasPlanchadas"]').val(0);

                    $tr.find('input[id="subTotalPlanchado"]').attr("readonly", true);
                    $tr.find('input[id="subTotalPlanchado"]').val(0);

                    calculaSubTotalPlanchado($tr);
                    sumaTotalTotales();
                }
            });

            $("#tableOrdenes").on('change', "#precioPlanchado", function () {
                var $tr = $(this).closest('tr');
                var precioPlanchado = $tr.find('input[id="precioPlanchado"]');
                if (precioPlanchado.val() <= 0) {
                    precioPlanchado.val("0");
                }

                calculaSubTotalPlanchado($tr);
            });

            $("#tableOrdenes").on('change', "#piezasPlanchadas", function () {
                var $tr = $(this).closest('tr');
                var piezasPlanchadas = $tr.find('input[id="piezasPlanchadas"]');
                if (piezasPlanchadas.val() <= 0 || piezasPlanchadas.val() == null || piezasPlanchadas.val() == undefined
                    || piezasPlanchadas.val() === undefined) {
                    piezasPlanchadas.val("0");
                }

                calculaSubTotalPlanchado($tr);
            });

            $("#tableOrdenes").on('change', "#tipoCobroPlanchado", function () {
                var $tr = $(this).closest('tr');
                calculaSubTotalLavado($tr);
            });

            function calculaSubTotalPlanchado($tr){
                var precioPlanchado = $tr.find('input[id="precioPlanchado"]');
                var piezasPlanchadas = $tr.find('input[id="piezasPlanchadas"]');

                var tipoCobroPlanchado = $tr.find('select[id="tipoCobroPlanchado"]');
              
                var subTotalPlanchado = 0;

                if(piezasPlanchadas.val() == 0){
                    $tr.find('input[id="subTotalPlanchado"]').val(0);
                    return true;
                }

                    subTotalPlanchado = precioPlanchado.val() * piezasPlanchadas.val();

    

                subTotalPlanchado = subTotalPlanchado.toFixed(2);
                $tr.find('input[id="subTotalPlanchado"]').val(subTotalPlanchado);
                sumaTotalTotales();
            }

            /**********************************  ENVIAR FORMULARIO  ****************************************/

            $("#formGuardaOrden").on('submit', function (event) {
                var idCliente = $("#idCliente");
                var anticipo = $("#anticipo");
                var total = parseFloat($('#totalTotal').val()); // Obtener el total calculado
                if (idCliente.val() <= 0 || idCliente.val() == null || idCliente.val() == undefined) {
                    alert("Elija un cliente");
                    event.preventDefault();
                    return true;
                }
                if (anticipo.val() === "" || anticipo.val() == null || anticipo.val() == undefined) {
        alert("Ingrese un anticipo válido ó 0 si no hay anticipo");
        event.preventDefault();
        return true;
    }
    if (parseFloat(anticipo.val()) > total) {
        alert("El anticipo no puede ser mayor al total");
        event.preventDefault();
        return true;
    }
                $(this).append('<input type="hidden" name="idCliente" value="' + idCliente.val() + '">');
            });
            $(this).append('<input type="hidden" name="anticipo" value="' + anticipo.val() + '">');

            /**********************************  TOTAL  ****************************************/
            sumaTotalTotales();//Para que se ejecute entrando a la página
            function sumaTotalTotales(){
                var suma = 0;
                $('.totalTotal').each(function() {
                    var valor = parseFloat($(this).val());
                    if (!isNaN(valor) && valor >= 0 && valor != undefined && valor !== undefined) {
                        suma += valor;
                    }
                });
                $('#totalTotal').val(suma.toFixed(2));
            }

            $("#tableOrdenes").on('change', ".montoTotal, .anticipo", function () {
    var $tr = $(this).closest('tr');
    var montoTotal = parseFloat($tr.find('.montoTotal').val()) || 0;
    var anticipo = parseFloat($tr.find('.anticipo').val()) || 0;

    var totalPendiente = montoTotal - anticipo;
    $tr.find('.totalPendiente').text(totalPendiente.toFixed(2));
});


            $("#tableOrdenes").on('change', ".totalTotal", function () {
                sumaTotalTotales();
            });
        });
    </script>
@endsection
