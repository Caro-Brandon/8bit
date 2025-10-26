<?php
require_once "includes/config.php";
$resultRatings = mysqli_query($conex, "SELECT rating FROM opinion WHERE idVideoJuego = $idJuego AND rating IS NOT NULL");

$totalRatings = 0;
$sumRatings = 0;
$ratingCounts = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];

while ($row = mysqli_fetch_assoc($resultRatings)) {
    $r = (int)$row['rating'];
    if ($r >= 1 && $r <= 5) {
        $ratingCounts[$r]++;
        $sumRatings += $r;
        $totalRatings++;
    }
}

$average = $totalRatings > 0 ? round($sumRatings / $totalRatings, 1) : 0;

$percentages = [];
foreach ($ratingCounts as $star => $count) {
    $percentages[$star] = $totalRatings > 0 ? round(($count / $totalRatings) * 100) : 0;
}
?>

