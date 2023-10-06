<?php
function my_str_reverse($string) {

	$result = "";
	$index = 0;

	while (isset($string[$index])) {
		$index++;
	}

	while ($index > 0) {
		$index--;
		$result .= $string[$index];
	}

	return $result;
}

my_str_reverse("Runtrack PHP");
?>