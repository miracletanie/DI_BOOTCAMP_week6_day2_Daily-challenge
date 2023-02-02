<html>
<head>
<meta charset="utf-8">
<title>Dame</title>

</head>
<body>

<?php

echo "<table>";
for ($i=0; $i<8; $i++) {
  echo "<tr>";
  for ($j=0; $j<8; $j++) {
    if (($i+$j) % 2 == 0) {
      echo "<td class='black'></td>";
    } else {
      echo "<td class='white'></td>";
    }
  }
  echo "</tr>";
}
echo "</table>";
?>
<style>
table {
    width: 500px;
    height: 500px;
    border-collapse: collapse;
    margin-left: 400px;
    border: 2px solid black;
  }
  td {
    width: 30px;
    height: 30px;
    text-align: center;
  }
  .black {
    background-color: black;
  }
  .white {
    background-color: white;
  }
</style>

</body>
</html>
