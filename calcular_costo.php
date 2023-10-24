<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener la cantidad ingresada por el usuario
    $cantidad = $_POST["cantidad"];

    // Cargar el archivo XML de precios
    $xml = simplexml_load_file("productos.xml");

    // Calcular el costo total
    if ($xml && $cantidad > 0) {
        $precio_camisetas = (float)$xml->camisa[0]->precio;
      

        // Calcular el costo total
        $costo_totalC = $cantidad *  $precio_camisetas;
       
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Calculo</title>
</head>
<body>
    <h1>Resultado del Calculo</h1>
    <?php
    if ($cantidad > 0) {
        echo "<p>Cantidad de camisas: $cantidad</p>";
        echo "<p>Costo total Camisetas: $" . number_format($costo_totalC , 2) . "</p>";
    
    } else {
        echo "<p>Ingrese una cantidad válida de camisas.</p>";
    }
    ?>
</body>
</html>
