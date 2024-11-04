<?php
$circulos = rand(1, 10);

if ($circulos == 1) {
    print "<h2>$circulos círculo</h2>\n";
} else {
    print "<h2>$circulos círculos</h2>\n";
}

print "<table class=\"conborde\">\n";
print "<tbody>\n";
print "<tr>\n";
for ($i = 0; $i < $circulos; $i++) {
    print "<td>\n";
    print "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" width=\"70\" height=\"70\">\n";
    print "  <circle cx=\"35\" cy=\"35\" r=\"30\" fill=\"black\" />\n";
    print "</svg>\n";
    print "</td>\n";
}
print "</tr>\n";
print "</tbody>\n";
print "</table>\n";
?>
