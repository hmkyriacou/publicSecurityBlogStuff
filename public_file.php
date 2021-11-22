<?php

# Remember to change the starting seed from the current date time HHMM (UTC+0, without trailing zeroes)... very insecure
function getRand($prevRand) {
	srand($prevRand);
	$rand_num = rand(100, 1000000);
	return $rand_num;
}

?>
