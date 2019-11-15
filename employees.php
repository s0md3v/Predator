<?php
header("Protected-By: Predator v0.1-alpha");

if (isset($_GET['id'])){
	if (preg_match('/SLEEP\((\d+)\)/', $_GET['id'], $delay)){
		sleep($delay[1]);
	}
}

$employees = ['
William B. Pine<br>
4614 Doe Meadow Drive<br>
Germantown, MD 20767<br><br>
Birthday: December 29, 1937<br>
Email Address: WilliamBPine@example.com<br>
Height: 5\' 8" (173 centimeters)<br>
Weight: 166.3 pounds (75.6 kilograms)<br>
Blood type: O+<br>',

'
Amy G. Ortiz<br>
196 Scenicview Drive<br>
Dallas, TX 75201<br><br>
Birthday: April 26, 1944<br>
Email Address: AmyGOrtiz@example.com<br>
Height: 5\' 1" (156 centimeters)<br>
Weight: 138.8 pounds (63.1 kilograms)<br>
Blood type: O+<br>',

'
Barbara G. Martin<br>
2274 Edsel Road<br>
Burbank, CA 91504<br><br>
Birthday: February 10, 1954<br>
Email Address: BarbaraGMartin@example.com<br>
Height: 5\' 2" (158 centimeters)<br>
Weight: 178.9 pounds (81.3 kilograms)<br>
Blood type: O+<br>'
]

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Predator - Employees</title>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href='css/styles.css' rel='stylesheet' />
</head>

<body>

<?php

if (isset($_GET['id'])) {
	$id = $_GET['id'];
/*	echo $id;*/
	if (preg_match('/\d+=\d+/', $id)){
		$num1 = preg_match('/(\d+)=/', $id, $re1);
		$num2 = preg_match('/=(\d+)/', $id, $re2);
		if ($re1[1] == $re2[1]){
			echo $employees[0];
		}
	}
	elseif (preg_match('/^\d+$/', $id)) {
		echo $employees[$id];
	}
}

if (preg_match('/(\d+?)\)\)\)$/', $id, $re)){
	$randnum = $re[1];
}

function binaryToString($binary)
{
    $binaries = explode(' ', $binary);
 
    $string = null;
    foreach ($binaries as $binary) {
        $string .= pack('H*', dechex(bindec($binary)));
    }
 
    return $string;    
}

if (preg_match_all('/0x([a-f0-9]+)/', $id, $re)){
	$str = hex2bin($re[1][0]).'1'.hex2bin($re[1][1]).hex2bin($re[1][2]);
}

echo '<!--SELECT * FROM ck_producttype  WHERE producttype_type='.$id.' AND producttype_status=1   ORDER BY producttype_sort asc <br />BIGINT value is out of range in \'(2 * if((select \''.$str.'\' from dual),'.$randnum.','.$randnum.'))\'. You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near \'\' ORDER BY trap_id asc\' at line 1-->';
?>
</body>
</html>