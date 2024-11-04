<?php

$num_circulos = rand(1, 10);

echo "<table border='1' style='margin: 20px auto; border-collapse: collapse;'>";

for ($i = 0; $i < $num_circulos; $i++) {
    echo "<tr><td style='padding: 20px; text-align: center;'><div style='width: 50px; height: 50px; background-color: black; border-radius: 50%; margin: 0 auto;'></div></td></tr>";
}

echo "</table>";
?>
