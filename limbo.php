<?php

function generateRandomString($length, $full=False) {
	   $characters = '0123456789qxzQWXYZ';
	   if ($full) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	   }
	   $charactersLength = strlen($characters);
	   $randomString = '';
	   for ($i = 0; $i < $length; $i++) {
	       $randomString .= $characters[rand(0, $charactersLength - 1)];
	   }
	   return $randomString;
}

function genMaze($length) {
	for ($i = 0; $i < $length; $i++) {
		$random = generateRandomString(mt_rand(5, 20));
	       echo "\n<a href=\"".$random.".php\">".generateRandomString(mt_rand(5, 20))."</a>";
	   }
}

genMaze(mt_rand(30, 40), True);
