<?php
$movie = $_REQUEST['film'];
$title = $movie;

function loadMovieInfo() {
	$movieinfoassign = "<div>";
	$movieinfomarkup = readfile("info.txt");
	$movieinfomarkup = $movieinfoassign . $movieinfomarkup . "</div>";
	return $movieinfomarkup;
}

function loadReview() {
	$moviereviewassign1 = "<div>";
	$moviereview1markup = readfile("review1.txt");
	$moviereview1markup = $moviereviewassign1 . $moviereviewmarkup1 . "</div>";
	return $moviereview1markup;
}

function loadReview1() {
	$moviereviewassign2 = "<div>";
	$moviereview2markup = readfile("review2.txt");
	$moviereview2markup = $moviereviewassign2 . $moviereviewmarkup2 . "</div>";
	return $moviereviewmarkup2;
}
function loadReview2() {
	$moviereviewassign3 = "<div>";
	$moviereview3markup = readfile("review3.txt");
	$moviereview3markup = $moviereviewassign3 . $moviereviewmarkup3 . "</div>";
	return $moviereviewmarkup3;
}
function loadReview3() {
	$moviereviewassign4 = "<div>";
	$moviereview4markup = readfile("review4.txt");
	$moviereview4markup = $moviereviewassign4 . $moviereviewmarkup4 . "</div>";
	return $moviereviewmarkup4;
}
function loadReview4() {
	$moviereviewassign5 = "<div>";
	$moviereview5markup = readfile("review5.txt");
	$moviereview5markup = $moviereviewassign5 . $moviereviewmarkup5 . "</div>";
	return $moviereviewmarkup5;
}
function loadReview5() {
	$moviereviewassign6 = "<div>";
	$moviereview6markup = readfile("review6.txt");
	$moviereview6markup = $moviereviewassign6 . $moviereviewmarkup6 . "</div>";
	return $moviereviewmarkup6;
}
function loadReview6() {
	$moviereviewassign7 = "<div>";
	$moviereview7markup = readfile("review7.txt");
	$moviereview7markup = $moviereviewassign7 . $moviereviewmarkup7 . "</div>";
	return $moviereviewmarkup7;
}
function loadReview7() {
	$moviereviewassign8 = "<div>";
	$moviereview8markup = readfile("review8.txt");
	$moviereview8markup = $moviereviewassign8 . $moviereviewmarkup8 . "</div>";
	return $moviereviewmarkup8;
}
function loadReview8() {
	$moviereviewassign9 = "<div>";
	$moviereview9markup = readfile("review9.txt");
	$moviereview9markup = $moviereviewassign9 . $moviereviewmarkup9 . "</div>";
	return $moviereviewmarkup9;
}
function loadReview9() {
	$moviereviewassign10 = "<div>";
	$moviereview10markup = readfile("review10.txt");
	$moviereview10markup = $moviereviewassign10 . $moviereviewmarkup10 . "</div>";
	return $moviereviewmarkup10;
}
function loadReview10() {
	$moviereviewassign11 = "<div>";
	$moviereview11markup = readfile("review11.txt");
	$moviereview11markup = $moviereviewassign11 . $moviereviewmarkup11 . "</div>";
	return $moviereviewmarkup11;
}

function loadoverviewimage() {
	$movieimgdiv = "<div>";
	$movieimgmarkup = readfile("overview.png");
	$movieimgmarkup = $movieimgdiv . $movieimgmarkup . "</div>";
	return $movieimgmarkup;
}

function loadOverview() {
	$movieoverviewdiv = "<div>";
	$movieoverviewmarkup = readfile("overview.txt");
	$movieoverviewmarkup = $movieoverviewdiv . $movieoverviewmarkup . "</div>";
	return $movieoverviewmarkup;
}

$movieinfo = loadMovieInfo();
$moviereview1 = loadReview();
$moviereview2 = loadReview1();
$moviereview3 = loadReview2();
$moviereview4 = loadReview3();
$moviereview5 = loadReview4();
$moviereview6 = loadReview5();
$moviereview7 = loadReview6();
$moviereview8 = loadReview7();
$moviereview9 = loadReview8();
$moviereview10 = loadReview9();
$moviereview11 = loadReview10();
$movieoverview = loadOverview();
$movieoverviewimage = loadoverviewimage();
?>
