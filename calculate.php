<?php
if (isset($_POST['submit'])) {
  $previousReading = $_POST['previous-reading'];
  $currentReading = $_POST['current-reading'];
  $unit = $_POST['unit'];

  $unitsConsumed = $currentReading - $previousReading;
  $totalBill = $unitsConsumed * $unit;

  echo "Previous Reading: $previousReading kWh<br>";
  echo "Current Reading: $currentReading kWh<br>";
  echo "Units Consumed: $unitsConsumed kWh<br>";
  echo "Total Bill: $totalBill";

 
}
?>