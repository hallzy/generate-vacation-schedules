<?php
$get_sd = $_GET["start_date"];
$start_date = strtotime("$get_sd");

$get_ed = $_GET["end_date"];
$end_date   = strtotime("$get_ed");

$shortest_vacation=$_GET["shortest_vacation"];
$longest_vacation=$_GET["longest_vacation"];

if ($longest_vacation < $shortest_vacation) {
  echo "Error, Long Vacation time must be bigger than Short Vacation Time";
  return;
}

$diff = $end_date - $start_date;
$diff_day = ceil($diff/60/60/24);

if ($diff_day <= 0) {
  echo "Error: Start days is equal to or later than the end date";
  return;
}

if ($diff_day < $longest_vacation) {
  $longest_vacation = $diff_days;
}

echo "<table border=\"1\">";
echo "<tr>";
  echo "<th>Number</th>";
  echo "<th>Start Date</th>";
  echo "<th>End Date</th>";
  echo "<th>Duration</th>";
echo "</tr>";

$vacation_time = $longest_vacation;
$total = 1;

while ($vacation_time >= $shortest_vacation) {
  $start_vacation_span=0;
  $end_vacation_span=$start_vacation_span+$vacation_time-1;

  while ($end_vacation_span < $diff_day) {
    $a = strtotime("+$start_vacation_span day", $start_date);
    $b = strtotime("+$end_vacation_span day", $start_date);

    $a = date("F j, Y", $a);
    $b = date("F j, Y", $b);
    $c = $vacation_time;
    echo "<tr>";
    echo "<td>$total</td>";
    echo "<td>$a</td>";
    echo "<td>$b</td>";
    echo "<td>$c</td>";
    echo "</tr>";

    $start_vacation_span++;
    $end_vacation_span++;
    $total++;
  }

  $vacation_time--;

}

echo "</table>";
?>
