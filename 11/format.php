<?php
$now 					= new DateTime();
$independence = new DateTime('7/4/1776');
$bastille 		= new DateTime('14-7-1789');
$future 			= new DateTime('2040-01-01');
$relative 		= new DateTime('+3 weeks 2 days');
$lastTuesday 	= new DateTime('last Tuesday of December 2015');
$format 			= 'g:i a, l, F j, Y';
//echo $now->format($format);
echo (new DateTime())->format($format);
echo '<p>America declared independence at ' . $independence->format($format) . '.</p>';
echo '<p>The French Revolution began at ' . $bastille->format($format) . '.</p>';
echo '<p>Time marches on: ' . $future->format($format) . '.</p>';
echo '<p>In 3 weeks, 2 days it will be : ' . $relative->format($format) . '.</p>';
echo '<p>The last Tuesday of December 2015 will be : ' . $lastTuesday->format($format) . '.</p>';