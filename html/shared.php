<?php
$movie = $_GET['film'];

while ($movie != NULL)
{

}
function loadMovieInfo() {
	$movieinfofile = fopen("info.txt","r");
	$movieinfomarkup = fgets($movieinfofile);
	return $movieinfomarkup;
}

function loadReview() {
	$moviereviewfile1 = fopen("review1.txt","r");
	$moviereview1markup = fgets($moviereviewfile1);
	return $moviereview1markup;
}

function loadReview1() {
	$moviereviewfile2 = fopen("review2.txt","r");
	$moviereview2markup = fgets($moviereviewfile2);
	return $moviereviewmarkup2;
}
function loadReview2() {
	$moviereviewfile3 = fopen("review3.txt","r");
	$moviereview3markup = fgets($moviereviewfile3);
	return $moviereviewmarkup3;
}
function loadReview3() {
	$moviereviewfile4 = fopen("review4.txt","r");
	$moviereview4markup = fgets($moviereviewfile4);
	return $moviereviewmarkup4;
}
function loadReview4() {
	$moviereviewfile5 = fopen("review5.txt","r");
	$moviereview5markup = fgets($moviereviewfile5);
	return $moviereviewmarkup5;
}
function loadReview5() {
	$moviereviewfile6 = fopen("review6.txt","r");
	$moviereview6markup = fgets($moviereviewfile6);
	return $moviereviewmarkup6;
}
function loadReview6() {
	$moviereviewfile7 = fopen("review7.txt","r");
	$moviereview7markup = fgets($moviereviewfile7);
	return $moviereviewmarkup7;
}
function loadReview7() {
	$moviereviewfile8 = fopen("review8.txt","r");
	$moviereview8markup = fgets($moviereviewfile8);
	return $moviereviewmarkup8;
}
function loadReview8() {
	$moviereviewfile9 = fopen("review9.txt","r");
	$moviereview9markup = fgets($moviereviewfile9);
	return $moviereviewmarkup9;
}
function loadReview9() {
	$moviereviewfile10 = fopen("review10.txt","r");
	$moviereview10markup = fgets($moviereviewfile10);
	return $moviereviewmarkup10;
}
function loadReview10() {
	$moviereviewfile11 = fopen("review11.txt","r");
	$moviereview11markup = fgets($moviereviewfile11);
	return $moviereviewmarkup11;
}

function loadOverview() {
	$movieoverviewimagefile = fopen("overview.png", "r");
	$movieoverviewfile = fopen("overview.txt","r");
	$movieoverviewmarkup = fgets($movieoverviewfile);
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

?>