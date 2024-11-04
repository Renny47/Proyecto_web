<?php
// Generar dos números aleatorios entre 1 y 6 para simular los dados
$dado1 = rand(1, 6);
$dado2 = rand(1, 6);

// Mostrar las imágenes correspondientes a los dados
echo "<div style='display: flex; gap: 20px; justify-content: center; align-items: center;'>";
echo "<img src='img/$dado1.png' alt='Dado $dado1' style='width:150px; height:150px;'>";
echo "<img src='img/$dado2.png' alt='Dado $dado2' style='width:150px; height:150px;'>";
echo "</div>";

// Verificar si hay una pareja o cuál es el mayor valor
if ($dado1 == $dado2) {
    echo "<p style='text-align: center; font-size: 18px; margin-top: 20px;'>¡Ha salido una pareja! El valor es <strong>$dado1</strong>.</p>";
} else {
    $valor_maximo = max($dado1, $dado2);
    echo "<p style='text-align: center; font-size: 18px; margin-top: 20px;'>No ha sacado pareja. El valor más alto es <strong>$valor_maximo</strong>.</p>";
}
?>
