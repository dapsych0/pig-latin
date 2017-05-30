<?php
use dapsych0\piglatin\PigLatin;

$pigLatin = new PigLatin();
$pigLatinString = $pigLatin->translate($englishText);

echo $pigLatinString;
