<?php

$images = array('/images/meeting.jpg', '/images/gym.jpg', '/images/workplace.jpg', '/images/snooker.jpg');

if (isset($_GET['src'])) {
	$src = $_GET['src'];
	if (in_array($src, $images)){
		echo '<img src=".'.$src.'"/>';
	}
	else {
		echo '<h2>Unable to load resource.<h2><!--root:x:0:0:root:/root:/bin/bash-->';
	}
}

?>