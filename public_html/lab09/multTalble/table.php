<?php

echo "<table border = \"1\">";

for ($i=0; $i <=100 ; $i++) {
  echo "<tr>";
  for ($j=0; $j <=100; $j++) {
    if ($j >0 && $i==0) {
      echo "<td>". $j."</td>";
    }
    else if ($j ==0 && $i >0) {
      echo "<td>". $i."</td>";
    }
    else if ($j >0 && $i >0) {
      echo "<td>". $i*$j."</td>";
    }
    else{
      echo "<td> </td>";
    }
  }
  echo "</tr>";
}
echo "</table>"


 ?>
