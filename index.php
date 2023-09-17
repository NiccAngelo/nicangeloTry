<!DOCTYPE html>
<html>
<head>
  <title>Electric Bill Calculator</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="glow container">
    <div class="main content">
    <h1 class="glow">Electric Bill Calculator</h1>
    <form action="calculate.php" method="post">
      <label for="previous-reading">Previous Reading:</label>
      <input type="number" id="previous-reading" name="previous-reading" required>

      <label for="current-reading">Current Reading:</label>
      <input type="number" id="current-reading" name="current-reading" required>

      <label for="unit">Unit (kWh):</label>
      <input type="number" id="unit" name="unit" required>

      <button type="submit" name="submit">Calculate</button>
    </form>
    </div>
  </div>
</body>
<script>
</script>
</html>