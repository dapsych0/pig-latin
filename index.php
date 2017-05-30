<?php
use dapsych0\piglatin\PigLatin;

$englishText = "Hello this is a test";

$pigLatin = new PigLatin();
$pigLatinString = $pigLatin->translate($englishText);

echo $pigLatinString;
