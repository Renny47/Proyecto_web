<?php
// Generar un número aleatorio entre 1 y 6
$dado = rand(1, 5);

// Mostrar la imagen correspondiente a la cara del dado
echo "<h3>¡Has sacado un $dado!</h3>";
echo "<img src='img/$dado.png' alt='Dado con el número $dado' style='width:200px; height:200px; border: 2px solid #000; padding: 10px; border-radius: 10px;'>";
?>
