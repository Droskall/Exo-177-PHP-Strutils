<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

require "./classes/StrUtils.php";

$cat = new StrUtils("chat");

echo $cat->bold();
echo "<br>";
echo $cat->italic();
echo "<br>";
echo $cat->underline();
echo "<br>";
echo $cat->capitalize();
echo "<br>";
echo $cat->uglify();
echo "<br>";
