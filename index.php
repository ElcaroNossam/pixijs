<?php
function pastYear($date): bool
{
    $date_parts = explode('/', $date);
    $year = $date_parts[2];
    return $year < date('Y');
}
function futureYear($date): bool
{
    $timestamp = strtotime($date);
    return $timestamp > time();
}
$dates = [  '02/15/2022', '02/16/2021',
            '02/17/2022', '02/18/2025',
            '02/19/2023', '02/20/2024',
            '02/21/2018', '02/22/2020'];


$pastYear = array_filter($dates, 'pastYEar');
$futureYear = array_filter($dates, 'futureYear');

echo "Last year's dates: " . implode(', ', $pastYear) . "\n";
echo "Future dates: " . implode(', ', $futureYear) . "\n";

