<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    echo "<table>";
    for ($i=0; $i < 10; $i++) { 
      echo "<tr>";
        for ($j=0; $j< 10; $j++) { 
          echo "<th>";
            if ($i % 2 != 0) {
              $num = rand(0,1000);
              $num*=2;
              echo "$num";
            }else{
              do {
                $num = rand(0,1000);
              } while ($num % 3 == 0 || $num % 5 == 0);  
              echo "$num";
            }
          echo "</th>";
        }
      echo "</tr>";
    }
    echo "</table>";
  ?>
</body>
</html>