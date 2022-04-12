<?php

$jml = $_GET['jml'];
$total = 0;
echo "<table border=1>\n";
for ($a = $jml, $k=1; $a > 0, $k<=$jml; ++$k, --$a)
{
    $total = $total + $k;
    
    echo "<td>total:$total</td>";
  echo "<tr>\n";
  for ($b = $a; $b > 0; $b--)
  {
    echo "<td>$b</td>";
  }
  echo "</tr>\n";
}
echo "</table>";

?>