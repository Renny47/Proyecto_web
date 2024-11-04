<?php

$carta1 = rand(1, 10);
$carta2 = rand(1, 10);
$carta3 = rand(1, 10);


$valor_maximo = max($carta1, $carta2, $carta3);

// Mostrar las imágenes correspondientes a las cartas
echo "<div style='display: flex; gap: 20px; justify-content: center; align-items: center;'>";
echo "<div><img src='Cartas/Carta$carta1.png' alt='Carta $carta1' style='width:150px; height:200px;'><br> $carta1 </div>";
echo "<div><img src='Cartas/Carta$carta2.png' alt='Carta $carta2' style='width:150px; height:200px;'><br> $carta2 </div>";
echo "<div><img src='Cartas/Carta$carta3.png' alt='Carta $carta3' style='width:150px; height:200px;'><br> $carta3 </div>";
echo "</div>";

echo "<p style='text-align: center; font-size: 18px; margin-top: 20px;'>La carta más alta es un <strong>$valor_maximo</strong>.</p>";
?>
