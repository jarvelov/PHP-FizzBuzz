<?php

/** You don't need to change this code: */

// Read max value
if (isset($argv[1])) {
	$max = $argv[1];
} else {
	echo "Usage: php {$argv[0]} <max> <rule1,rule2>\n";
	die();
}
// Read rules
if (!isset($argv[2])) {
	//default to fizz if no rules are supplied
	$rules = ['fizz'];
} else {
	//store all rules as strings in the rules array
	$rules = explode(',', $argv[2]);
}

/**
 * Here you should add your own implementation 
 *
 * @var int      $max   the maximum number that fizzbuzz should show
 * @var string[] $rules array with the rules as strings
 */

echo "1 2"; //replace and extend this code

