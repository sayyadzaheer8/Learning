<?php



$totalVisits = file_get_contents('visits.txt');

$totalVisits = $totalVisits + 1;

file_put_contents('visits.txt', $totalVisits);

echo $totalVisits;


