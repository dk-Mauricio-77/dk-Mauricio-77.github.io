<?php
// URL a la que haremos la solicitud GET
$url = 'https://jsonplaceholder.typicode.com/posts/1'; // Ejemplo de una API JSON de prueba

// Inicialización de la sesión cURL
$ch = curl_init($url);

// Configuración de opciones de cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Realización de la solicitud GET
$response = curl_exec($ch);

// Cierre de la sesión cURL
curl_close($ch);

// Verificación de si la solicitud fue exitosa
if ($response) {
    // Decodificación de la respuesta JSON
    $data = json_decode($response, true);
    if ($data) {
        // Impresión de la respuesta en formato JSON
        echo "Respuesta del servidor:\n";
        print_r($data);
    } else {
        echo "No se pudo decodificar la respuesta JSON.";
    }
} else {
    echo "La solicitud no fue exitosa.";
}
?>
