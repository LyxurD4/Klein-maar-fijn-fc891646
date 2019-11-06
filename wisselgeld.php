<?php
$bedrag = floatval($argv[1]);
var_dump($argv);
var_dump($bedrag);

$euroeenheden = array(
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
);

$restbedrag = $bedrag;
foreach($euroeenheden as $value) {
    if ($restbedrag >= $value) {
        $aantalKeer = floor($restbedrag / $value);
        $restbedrag = fmod($restbedrag, $value);
        echo "$aantalKeer X $value euro" . PHP_EOL;
    }
}
$centeenheden = array(
    50,
    20,
    10,
    5,  
);

$restbedrag *= 100;
$restbedrag = round($restbedrag, 0);
$restbedrag = intval($restbedrag );
foreach($centeenheden as $value) {
    if ($restbedrag >= $value) {
        $aantalKeer1 = floor($restbedrag / $value);
        $restbedrag = fmod($restbedrag, $value);
        echo "$aantalKeer1 X $value cent" . PHP_EOL;
    }
}
?>