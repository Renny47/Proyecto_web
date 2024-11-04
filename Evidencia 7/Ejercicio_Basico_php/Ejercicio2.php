<?php
// Generar un número aleatorio entre 1 y 6
$numero = rand(1, 6);

//Para mejorar la apariencia del numero
echo "<style>
    .numero {
        font-size: 48px;
        font-weight: bold;
        color: #333;
        border: 3px solid #000;
        padding: 20px;
        width: 100px;
        text-align: center;
        margin: 50px auto;
        border-radius: 10px;
        box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.2);
        background-color: #f9f9f9;
    }
</style>";


echo "<div class='numero'>$numero</div>";
?>
