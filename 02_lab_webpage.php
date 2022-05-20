<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		Lab 4
	</title>
</head>

<body>
	<header>
		<h1>
			Lab 4
		</h1>
	</header>

	<main>
		<code>

			<?php

			/*
 * This code is provided to ensure the display is easy to read on both the command line
 * and through the browser.
 * 
 * The SAPI in use on this server is fpm-fcgi - cgi is an acronym for Common Gateway Interface
 * 
 * If the code is running through cgi, and the name of the script being executed is  
 * the name of the file, set the Content-Type header to text/plain so the browser doesn't 
 * expect HTML.
 */

			if (
				strpos(PHP_SAPI, 'cgi') !== false &&
				isset($_SERVER['SCRIPT_NAME']) &&
				strpos($_SERVER['SCRIPT_NAME'], basename(__FILE__)) !== false
			) {
				header('Content-Type: text/plain');
			}

			/* 
 * The pattern for this lab is to create variables by assigning a value and perform a variety
 * of operations on them
 * Remember - the type of the variable is determined by the value assigned
 * The var_dump function will then be used to display the type and value for each variable
 *
 * For example:
 * $integer = 6;
 * var_dump($integer);
 *
 * var_dump may also be used to display the return value of a function, such as var_dump(isset($unset));
 *
 * In addition, some variables will be evaluated by functions (https://www.php.net/manual/en/ref.var.php)
 * and the results displayed
 *
 * For example:
 * echo is_integer($integer) ? 'Integer' : 'Not integer';
 */

			// Without assigning a value to the variable, use the function var_dump on $unset.

			var_dump($unset);

			// use var_dump to display the results of isset, empty and is_null on $unset

			$unset;
			var_dump($unset); // empty
			$unset = 6;
			var_dump($unset); // isset
			$unset = null;
			var_dump($unset); // is_null

			// Create a boolean, integer and float variable and use var_dump to display the values

			$bool = true;
			$int = 17;
			$float = 10.5;

			var_dump($bool);
			var_dump($int);
			var_dump($float);

			/*
 * Create four strings, one with single quotes, one with double quotes which includes one of
 * the previously defined variables, a heredoc with one of the previously defined variables
 * a nowdoc with one of the previously defined variables
 */

			echo 'Hello, my name is Arianna.' . PHP_EOL;
			

			echo "Hello, my name is Arianna and my favorite number is $int." . PHP_EOL;

			$heredoc = <<< HERE
Hello, my name is Arianna and my favorite number is not $float.
HERE;
			echo $heredoc . PHP_EOL;

			$nowdoc = <<< 'NOW'
Hello, my name is Arianna and the fact that my favorite number is 17 is $bool.
NOW;
			echo $nowdoc . PHP_EOL;

			/*
 * Create a single-dimension array of five elements without keys. Sort the array
 * and check for an element with the value 'stuff' (it is fine if it does not exist)
 * Remove the second element.
 */

			$array = [1, 2, true, 9, 'seven'];
			sort($array);
			echo 'Stuff in indexed array: ' . in_array('stuff', $array) . PHP_EOL;
			unset($array[1]);
			var_dump($array);

			/*
 * Create a single-dimension associative array of five elements. Check to see if there is
 * an element with the index 'stuff' (it is fine if it doesn't exist). Reverse the array
 * retaining the key association.
 */

			$assoc = ['one' => 1, 'five' => 5.1, 'cat' => true, 'red' => false, 'str' => 'hello'];
			echo 'Stuff in associative array: ' . array_key_exists('stuff', $assoc) . PHP_EOL;
			var_dump(array_reverse($assoc, true));
			?>
		</code>
	</main>
</body>

</html>