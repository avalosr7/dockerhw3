<?php
include 'shared.php'
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
	<meta name="viewport" content = "width-device-width"/>
	<link href="movie.css" type="text/css" rel="stylesheet" />
</head>
<body style="background-image:url('http://www.u.arizona.edu/~milazzom/cscv337sp14/hw2/background.png')">
		<div id="moviebanner">
			<img src="http://www.u.arizona.edu/~milazzom/cscv337sp14/hw2/banner.png" alt="Rancid Tomatoes" width="1500"/>
		</div>
		<h1 id="movietitle" style="font-family:verdana;font-size:24px" align="center">
			<?php
				echo "$title"
			?>
		</h1>
		
		<div id="moviecontent" class="content">
		
			<div class="overview">
				<img src="http://www.u.arizona.edu/~milazzom/cscv337sp14/hw2/overview.png" alt="general overview" />
			</div>
			<dl id="movieinfo" class="overviewcontent" style="font-family:verdana;font-size:8px">
				<?=$movieoverview?>
			</dl>
			<div id="moviescore" class="score" style="background-image:url('http://www.u.arizona.edu/~milazzom/cscv337sp14/hw2/rottenbackground.png')">
				<?$movieinfo?>
			</div>
			<div id="criticreview" class="critics">
				<p id="moviecritic" class="critics0">
					<?$moviereview1?>
				</p>
				<p id="moviecritic" class="critics1">
					<?$moviereview2?>
				</p>
				<p id="moviecritic" class="critics2">
					<?$moviereview3?>
				</p>
				<p id="moviecritic" class="critics3">
					<?$moviereview4?>
				</p>
				<p id="moviecritic" class="critics4">
					<?$moviereview5?>
				</p>
				<p id="moviecritic" class="critics5">
					<?$moviereview6?>
				</p>
				<p id="moviecritic" class="critics6">
					<?$moviereview7?>
				</p>
				<p id="moviecritic" class="critics7">
					<?$moviereview8?>
				</p>
				<p id="moviecritic" class="critics8">
					<?$moviereview9?>
				</p>
				<p id="moviecritic" class="critics9">
					<?$moviereview10?>
				</p>
				<p id="moviecritic" class="critics10">
					<?$moviereview11?>
				</p>
			</div>
		</div>
	<div>
			<a href="http://validator.w3.org/check?uri=referer"
style="background-color: transparent">
<img style="border-style:none" width="88" height="31"
src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" /></a>
&nbsp;&nbsp;
<a href="http://jigsaw.w3.org/css-validator/check/referer"
style="background-color: transparent">
<img style="border-style:none" width="88" height="31"
src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>
		</div>
</body>
</html>
