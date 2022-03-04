<?php
header("Content-type: application/json; charset=iso-8859-1");
$string = file_get_contents("bytoiletter.json");
echo $string;