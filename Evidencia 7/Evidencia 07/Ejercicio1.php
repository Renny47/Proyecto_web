<?php
$longitud = rand(10, 1000);

print "<p>Longitud: $longitud</p>\n";
print "<p>\n";
print "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\">\n";
print "  <rect width=\"" . $longitud . "px\" height=\"10px\"/>\n";
// Forma alternativa (otra opción para dibujar una línea en lugar de un rectángulo)
// print "  <line x1=\"1\" y1=\"5\" x2=\"$longitud\" y2=\"5\" stroke=\"black\" stroke-width=\"10\" />\n";
print "</svg>\n";
print "</p>\n";
?>
