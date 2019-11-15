<?php
	header("Content-type: text/html");
	header("Protected-By: Predator v0.1-alpha");
?>

<!doctype html>
<html>
	<head>
			<meta charset="utf-8" />
			<title>Predator - Home</title>
			<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1" />
			<link href='css/styles.css' rel='stylesheet' />
			<script src="./js/isBot.js"></script>
	</head>

<body>
	<noscript>
		<?php genMaze(mt_rand(20, 30), True);?>
		<meta http-equiv="refresh" content="0; url=limbo.php" />
	</noscript>

	<header>
		<div class='content'>
			<img src="./images/logo.png" alt="Predator logo" class='logo' />
			<h1 class='heading'>[ Predator ]</h1>
			<h2 class='subheading'>- Designed to hunt the hunters -</h2>
			<a style="display: none;" href="jail.php">Slow down there crawly boy.</a>
		</div>
	</header>
	
	<section id='search'>
		<h3>Search our website</h3>
		<form action='/' method='GET'>
			<input type="text" name="search" placeholder='Search' class='form-control' required />
			<button type='submit'>Search</button>
		</form>

		<?php
			if(isset($_GET['search'])) {
				$pre = ''; $post = '';
				$search = $_GET['search'];
				if(preg_match("/<\/pre>/i", $search)) {
					$pre = '<!--'; $post = '-->';
				}
				echo "<div class='list'><pre>No results found for '".$pre.$search.$post."'</pre></div>";
			}
		?>
	</section>

	<section>
		<h3>Our Employees</h3>
		<ul>
			<li><a/href="employees.php?id=0"/href="">William B. Pine</a></li>
			<li><a/href="employees.php?id=1"/href="">Amy G. Ortiz</a></li>
			<li><a/href="employees.php?id=2"/href="">Barbara G. Martin</a></li>
		</ul>
	</section>

	<section>
		<h3 class='title'>Facilities</h3>

		<div class='row mt-1'>
			<div class="col-25 col-sm">
				<a/href="gallery.php?src=/images/gym.jpg"/href=""/class='card lift-hover'>
					<img src="./images/gym.jpg" class='card-image-top' />
					<div class="card-body">
						<h3 style='margin: 0px;color: #1e1e1e;'>Gym</h3>
					</div>
				</a>
			</div>
			
			<div class="col-25 col-sm">
				<a/href="gallery.php?src=/images/workplace.jpg"/href=""/class='card lift-hover'>
					<img src="./images/workplace.jpg" class='card-image-top' />
					<div class="card-body">
						<h3 style='margin: 0px;color: #1e1e1e;'>Workplace</h3>
					</div>
				</a>
			</div>
			
			<div class="col-25 col-sm">
				<a/href="gallery.php?src=/images/meeting.jpg"/href=""/class='card lift-hover'>
					<img src="./images/meeting.jpg" class='card-image-top' />
					<div class="card-body">
						<h3 style='margin: 0px;color: #1e1e1e;'>Meeting</h3>
					</div>
				</a>
			</div>
			
			<div class="col-25 col-sm">
				<a/href="gallery.php?src=/images/snooker.jpg"/href=""/class='card lift-hover'>
					<img src="./images/snooker.jpg" class='card-image-top' />
					<div class="card-body">
						<h3 style='margin: 0px;color: #1e1e1e;'>Snooker</h3>
					</div>
				</a>
			</div>
		</div>
	</section>

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
	echo "<span style=\"display: none;\"><a href=\"".generateRandomString(mt_rand(3, 10)).".php\">Do you see this?</a></span>";
	function genMaze($length) {
		for ($i = 0; $i < $length; $i++) {
			$random = generateRandomString(mt_rand(11, 20));
	        echo "<a href=\"".$random.".php\">".$random."\n";
	    }
	}
?>

<script>
	bot = isBot();
	if (bot){
		Array.from(document.getElementsByTagName("a")).forEach(function(i) {
			i.href = "https://www.google.com/search?q=somdev+sangwan";
		});
	}
</script>
<footer style="text-align: center;">Copyright © <a href="https://github.com/s0md3v" alt="Pre">Predator</a></footer>
</body>
</html>
