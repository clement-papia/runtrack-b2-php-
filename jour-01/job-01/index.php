<?php
function my_str_search($character, $string) {

$occurrences = 0;
$index = 0;

while (isset($string[$index])) {
    if ($string[$index] === $character) {
      $occurrences++;
    }
    $index++;
}

return $occurrences;
}

my_str_search('P', 'Runtrack PHP');
?>