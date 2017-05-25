<?php
function censorEmail($email)
{
	$at = strpos($email, '@');
	$partOne = substr($email, 0, round($at / 2, 0, PHP_ROUND_HALF_DOWN));
	$censored = str_repeat('*', round($at / 2, 0, PHP_ROUND_HALF_UP));
	$partTwo = substr($email, $at);
	$email = $partOne.$censored.$partTwo;
	return $email;
}

echo censorEmail('example@example.com');
