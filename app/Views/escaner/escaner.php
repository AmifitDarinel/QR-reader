<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo base_url(); ?>/public/img/logo/logoICO.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/css/informacion/informacion.css">
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    main {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #reader {
        width: 600px;
    }

    #result {
        text-align: center;
        font-size: 1.5rem;
    }

    .boton-flotante {
        position: fixed;
        font-size: 30px;
        bottom: 20px;
        right: 20px;
        border-radius: 30px;
    }

    #html5-qrcode-button-camera-start {
        background-color: black;
        border: none;
        color: white;
        border-radius: 20px;
        padding: 5px 5px 5px 5px;
    }

    #html5-qrcode-button-camera-stop {
        background-color: black;
        border: none;
        color: white;
        border-radius: 20px;
        padding: 5px 5px 5px 5px;
    }

    #html5-qrcode-button-camera-permission {
        background-color: black;
        border: none;
        color: white;
        border-radius: 20px;
        padding: 5px 5px 5px 5px;
    }

    #html5-qrcode-button-camera-stop::before {
        content: 'Detener / ';
    }

    #html5-qrcode-button-camera-start::before {
        content: 'Iniciar / ';
    }

    #html5-qrcode-button-camera-permission::before {
        content: 'Dar permisos de camara / ';
    }

    #html5-qrcode-anchor-scan-type-change::before {
        content: 'Escanear por imagen / ';
    }

    #html5-qrcode-button-file-selection::before {
        content: 'Subir imagen / ';
    }

    .checkbox-container {
        display: inline-block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 15px;
        cursor: pointer;
        font-size: 22px;
        user-select: none;
    }

    .checkbox-container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }

    .checkbox-container:hover input~.checkmark {
        background-color: #ccc;
    }

    .checkbox-container input:checked~.checkmark {
        background-color: #2196F3;
    }

    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    .checkbox-container input:checked~.checkmark:after {
        display: block;
    }

    .checkbox-container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 2px 2px 0;
        transform: rotate(45deg);
    }

    .checkbox-wrapper-19 {
        box-sizing: border-box;
        --background-color: #fff;
        --checkbox-height: 25px;
    }

    @-moz-keyframes dothabottomcheck-19 {
        0% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) / 2);
        }
    }

    @-webkit-keyframes dothabottomcheck-19 {
        0% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) / 2);
        }
    }

    @keyframes dothabottomcheck-19 {
        0% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) / 2);
        }
    }

    @keyframes dothatopcheck-19 {
        0% {
            height: 0;
        }

        50% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) * 1.2);
        }
    }

    @-webkit-keyframes dothatopcheck-19 {
        0% {
            height: 0;
        }

        50% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) * 1.2);
        }
    }

    @-moz-keyframes dothatopcheck-19 {
        0% {
            height: 0;
        }

        50% {
            height: 0;
        }

        100% {
            height: calc(var(--checkbox-height) * 1.2);
        }
    }

    .checkbox-wrapper-19 input[type=checkbox] {
        display: none;
    }

    .checkbox-wrapper-19 .check-box {
        height: var(--checkbox-height);
        width: var(--checkbox-height);
        background-color: transparent;
        border: calc(var(--checkbox-height) * .1) solid #000;
        border-radius: 5px;
        position: relative;
        display: inline-block;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        -moz-transition: border-color ease 0.2s;
        -o-transition: border-color ease 0.2s;
        -webkit-transition: border-color ease 0.2s;
        transition: border-color ease 0.2s;
        cursor: pointer;
    }

    .checkbox-wrapper-19 .check-box::before,
    .checkbox-wrapper-19 .check-box::after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        position: absolute;
        height: 0;
        width: calc(var(--checkbox-height) * .2);
        background-color: #34b93d;
        display: inline-block;
        -moz-transform-origin: left top;
        -ms-transform-origin: left top;
        -o-transform-origin: left top;
        -webkit-transform-origin: left top;
        transform-origin: left top;
        border-radius: 5px;
        content: " ";
        -webkit-transition: opacity ease 0.5;
        -moz-transition: opacity ease 0.5;
        transition: opacity ease 0.5;
    }

    .checkbox-wrapper-19 .check-box::before {
        top: calc(var(--checkbox-height) * .72);
        left: calc(var(--checkbox-height) * .41);
        -moz-transform: rotate(-135deg);
        -ms-transform: rotate(-135deg);
        -o-transform: rotate(-135deg);
        -webkit-transform: rotate(-135deg);
        transform: rotate(-135deg);
    }

    .checkbox-wrapper-19 .check-box::after {
        top: calc(var(--checkbox-height) * .37);
        left: calc(var(--checkbox-height) * .05);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
    }

    .checkbox-wrapper-19 input[type=checkbox]:checked+.check-box,
    .checkbox-wrapper-19 .check-box.checked {
        border-color: #34b93d;
    }

    .checkbox-wrapper-19 input[type=checkbox]:checked+.check-box::after,
    .checkbox-wrapper-19 .check-box.checked::after {
        height: calc(var(--checkbox-height) / 2);
        -moz-animation: dothabottomcheck-19 0.2s ease 0s forwards;
        -o-animation: dothabottomcheck-19 0.2s ease 0s forwards;
        -webkit-animation: dothabottomcheck-19 0.2s ease 0s forwards;
        animation: dothabottomcheck-19 0.2s ease 0s forwards;
    }

    .checkbox-wrapper-19 input[type=checkbox]:checked+.check-box::before,
    .checkbox-wrapper-19 .check-box.checked::before {
        height: calc(var(--checkbox-height) * 1.2);
        -moz-animation: dothatopcheck-19 0.4s ease 0s forwards;
        -o-animation: dothatopcheck-19 0.4s ease 0s forwards;
        -webkit-animation: dothatopcheck-19 0.4s ease 0s forwards;
        animation: dothatopcheck-19 0.4s ease 0s forwards;
    }

    #imagenFondo {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9999;
        display: none;
    }

    #imagenFondo img {
        display: block;
        margin: auto;
        max-width: 100%;
        max-height: 100%;
    }

    @media screen and (min-width:200px) {
        #reader {
            width: 350px;
        }
    }

    .boton-flotante-buscar {
        position: fixed;
        font-size: 30px;
        bottom: 20px;
        left: 20px;
        border-radius: 30px;
    }

</style>

<body>
    <div style="display: flex; align-items: center; border: 0; height: 70px; background-color:black;">
        <header style="flex: 1;">
            <center>
                <a href="javascript:void(0);">
                    <img src="<?php echo base_url(); ?>/public/img/logo/logo_amarillo.png" alt="Amifit" width="" height="50">
                </a>
            </center>
        </header>
    </div>
    <br>

    <input hidden id="IndoSuperAdmin" ruta="<?php echo base_url(); ?>">
    <div class="contenedor-info">
        <br>
        <center>
            <h2 id="mensaje" style="color: orange;" hidden>Error en el Qr</h2>
        </center>
        <center>
            <h2 class="font" style="text-shadow: 1px 1px 9px white;">
                Evento:
            </h2>

            <div id="reader"></div>
            <div id="result"></div>
            <input hidden type="text" name="" id="buscador" class="texto-input" placeholder="Nombre, Número Corredor, Email">
            <br>
            <button hidden id="buscadorBoton" type="button" class="btn btn-dark">Buscar</button>
            <button id="manual" onclick="detenerEscaneo()" class="btn btn-warning boton-flotante-buscar"><i class="fa fa-edit"></i></button>
            <button id="reinicio" onclick="activarEscaneo()" class="btn btn-warning boton-flotante"><i class="fa fa-camera"></i></button>
        </center>
        <br>
        <div id="mensajeIdNulo" hidden>
            <center>
                <p id="mensajeBuscar" style="color: orange;">Lamentamos informarte que no hemos podido localizar el código QR.</p>
                <img src="<?php echo base_url(); ?>/public/img/eventos/carreradelashortensias/robot.png" alt="" width="250px">
            </center>
        </div>
        <div id="mensajeIdNuloNoQr" hidden>
            <center>
                <p id="mensajeBuscar" style="color: orange;">Lamentablemente, no pudimos encontrar la información que solicitaste. </p>
                <img src="<?php echo base_url(); ?>/public/img/eventos/carreradelashortensias/robot.png" alt="" width="250px">
            </center>
        </div>
        <div id="resultados">
        </div>
    </div>
    </div>
    <center></center>
</body>
<main>
    <br>
</main>
<div id="imagenFondo">
    <img src="<?php echo  base_url() ?>/public/img/hortensias/PopUp-Inscritos.png" alt="Custom image">
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    let scanner = null;

    function success(result) {
        console.log('result');
        console.log(result);
        // var textoFinal = tomarDespuesDeCincoBarras(result);
        const textoFinal = extraerToken(result);
        document.getElementById('buscador').value = textoFinal;
        scanner.clear();
        var button = document.getElementById('buscadorBoton');
        button.dispatchEvent(new Event('click'));
        var input = document.getElementById('buscador');
        input.value = 'qrError';
    }
    function extraerToken(url) {
    // 1) intenta ?ID=token
    const q = new URL(url).searchParams.get('ID');
    if (q) return q;

    // 2) fallback al viejo formato “.../informacionUsuario/token”
    const parts = url.split('/');
    return parts[parts.length - 1];
}


    function error(err) {
        console.error(err);
    }

    function tomarDespuesDeCincoBarras(texto) {
        let contadorBarras = 0;
        let textoTomado = "";
        for (let i = 0; i < texto.length; i++) {
            if (texto[i] === '/') {
                contadorBarras++;
                if (contadorBarras === 5) {
                    textoTomado = texto.substring(i + 1);
                    break;
                }
            }
        }
        return textoTomado;
    }

    function activarEscaneo() {
        $('#reader').fadeIn('input');
        $('#resultados').hide();
        scanner = new Html5QrcodeScanner('reader', {
            qrbox: {
                width: 250,
                height: 250,
            },
            fps: 20,
        });
        scanner.render(success, error);
        $('#reinicio').hide();
    }

    function detenerEscaneo() {
        if (scanner) {
            scanner.clear();
        }
    }
</script>

<script>
    $(document).ready(function() {
        var route = $('#IndoSuperAdmin').attr('ruta');
        console.log
        $('#activarEscaneo').hide();


        // $.ajax({
        //     url: route + '/Cliente/verificar_sesion',
        //     method: "POST",
        //     success: function(response) {
        //         if (response === 'not_logged_in') {
        //             $("#imagenFondo").fadeIn();
        //         }
        //     }
        // });

        $("#manual").click(function() {
            $("#buscador").removeAttr("hidden");
            $("#buscadorBoton").removeAttr("hidden");
            $("#resultados").fadeOut();
            $('#buscador').val('');
            $('#reinicio').fadeIn();
        });
        $('#buscadorBoton').on('click', function() {
            var terminoBusqueda = $('#buscador').val();
            var contadorCaracteres = terminoBusqueda.length;
            console.log('terminoBusqueda');
            console.log(route + 'HomeHortensias/buscarId');
            $.ajax({
                url: route + 'HomeHortensias/buscarId',
                method: 'POST',
                data: {
                    'id': terminoBusqueda
                },
                dataType: 'json',
                success: function(data) {
                    console.log(contadorCaracteres);
                    mostrarResultados(data, contadorCaracteres);
                },
                error: function(e) {
                    console.error(e);
                }
            });
        });

        function insertLineBreaks(inputString, breakLength) {
            var result = '';
            for (var i = 0; i < inputString.length; i += breakLength) {
                result += inputString.substr(i, breakLength) + '<br>';
            }
            return result;
        }
        var codigoEjecutado = false;

        function mostrarResultados(resultados, caracteres) {
            var animacionRealizada = false;
            var respuesta = $('#buscador').val();
            $('#buscador').attr('hidden', true);
            $('#buscadorBoton').attr('hidden', true);
            $('#resultados').empty();
            $('#mensajeIdNulo').fadeOut();
            console.log(resultados);
            if (resultados != 0) {
                resultados.map(e => {
                    var nuevoResultado = $(
                        `<center>
                            <img src="<?php echo base_url(); ?>/public/img/hortensias/purple_minimum.png" alt="Amifit Carrera de las hortensias" height="200">
                            <h2 class="font">Participante</h2>
                        </center>
                        <div class="contenedor-info" style="display: none; margin-bottom: 3.5rem;">
                            <table>
                                <tr>
                                    <td class="text-end">Nombre</td>
                                    <td><h2>${e.Nombre}</h2></td>
                                </tr>

                                <tr>
                                    <td class="text-end">Correo</td>
                                    <td><h7>${e.Correo}</h7></td>
                                </tr>

                                <tr>
                                    <td class="text-end">Teléfono</td>
                                    <td><h2>${e.Telefono}</h2></td>
                                </tr>

                                <tr>
                                    <td class="text-end">No. Corredor</td>
                                    <td><h2>${e.NumeroParticipante}</h2></td>
                                </tr>

                                <tr>
                                    <td class="text-end">Playera</td>
                                    <td><h2>${e.TipoPlayera}</h2></td>
                                </tr>

                                <tr>
                                    <td class="text-end">Total</td>
                                    <td><h2>$${e.TotalConDescuento === '0.00' ? e.Total : e.TotalConDescuento}</h2></td>
                                </tr>

                                <tr>
                                    <td class="text-end">Tipo Pago</td>
                                    <td><h2>${e.TipoPago}</h2></td>
                                </tr>

                                <tr>
                                    <td class="text-end">Status</td>
                                    <td style="font-size: 2rem;" class="${e.StatusPago === 'Pagado' ? 'text-success' : e.StatusPago === 'Cancelado' ? 'text-danger' : e.StatusPago === 'Pendiente' ? 'text-warning' : ''}">
                                        <h2>${e.StatusPago}</h2>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="float: right;">Confirmar asistencia</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-12 checkbox-wrapper-19 d-flex">
                                                <input type="checkbox" id="check-term" ${e.Asistencia == '1' || e.Asistencia == 1 ? 'checked' : ''} />
                                                <label for="check-term" class="check-box"></label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>`
                    )

                    $('#errortexto').fadeOut();
                    $('#resultados').append(nuevoResultado);
                    $('#resultados').fadeIn();
                    $('#reinicio').fadeIn();
                    $('#mensajeIdNuloNoQr').fadeOut();
                    nuevoResultado.fadeIn(1000);

                    $("#check-term").click(function() {
                        if ($(this).is(":checked")) {
                            const swalWithBootstrapButtons = Swal.mixin({
                                customClass: {
                                    confirmButton: "btn btn-success",
                                    cancelButton: "btn btn-danger"
                                },
                                buttonsStyling: false
                            });
                            swalWithBootstrapButtons.fire({
                                title: "Confirmar asistencia",
                                text: "¿Deseas confirmar la asistencia?",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonText: "Confirmar",
                                cancelButtonText: "Cancelar",
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    console.log(e.Id);
                                    $.ajax({
                                        url: route + 'HomeHortensias/actualizarAsistencia',
                                        method: 'POST',
                                        dataType: 'text',
                                        data: {
                                            'id': e.Id,
                                            'estado': 1
                                        },
                                        success: function(data) {
                                            Swal.fire({
                                                position: "center",
                                                icon: "Asistencia",
                                                title: "Se ha confirmado la asistencia del participante",
                                                showConfirmButton: false,
                                                //timer: 2000,
                                                toast: true
                                            });
                                        },
                                        error: function(e) {
                                            console.error(e);
                                        }
                                    });
                                } else {
                                    $('#check-term').prop('checked', false);
                                }
                            });
                        }
                    });
                });
            } else {

                console.log("dentro else")
                if (respuesta == 'qrError') {
                    $('#mensajeIdNulo').removeAttr('hidden');
                    $('#mensajeIdNulo').fadeIn();
                    $('#buscador').val('');
                } else {
                    $('#mensajeIdNuloNoQr').removeAttr('hidden');
                    $('#mensajeIdNuloNoQr').fadeIn();
                }
                $('#reinicio').fadeIn();

                $('#buscador').removeAttr('hidden');
                $('#buscador').fadeIn();
                $('#buscadorBoton').removeAttr('hidden');
                $('#buscadorBoton').fadeIn();
            }
        }
        $('#reinicio').click(function() {
            $('#buscador').attr('hidden', true);
            $('#buscadorBoton').attr('hidden', true);
            $('#mensajeIdNuloNoQr').fadeOut();
            $('#mensajeIdNulo').fadeOut();
        });

    });
</script>

</html>