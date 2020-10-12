
<?php


echo "<table>";
  for($tbl=1; $tbl<=9; $tbl++){
    echo "<td>";
      for($ljr=1; $ljr<=2; $ljr++){
        for( $a=9; $a>0; $a--){
            for($i=1; $i<=$a; $i++){
                echo "_";
            }for($a1=9; $a1>$a; $a1--){
                echo"x";
            }for($a2=9; $a2>$a; $a2--){
                echo"x";
            }echo"<br>";
        }for($b=0; $b<=9; $b++){
            for($j=1; $j<=$b; $j++){
                echo"_";
            }for($b1=9; $b1>$b; $b1--){
                echo"x";
            }for($b2=9; $b2>$b; $b2--){
                echo"x";
            }echo"<br>";
        }
      }
    echo"</td>";
    }
  echo"</table>";

?>
