<?php
class Calculation {

   public function time_difference(){
    if(isset($_POST['result'])){
      $first_input = $_POST['input1'];
      $second_input = $_POST['input2'];

      $pieces = explode(" ",$first_input);
      $pieces2 = explode(" ",$second_input);

      $add = ((int)$pieces[0] * 40) + ((int)$pieces[1] * 8) + ((int)$pieces[2]);
      $add1 = ((int)$pieces2[0] * 40) + ((int)$pieces2[1] * 8) + ((int)$pieces2[2]);
      echo "<b>";
      echo "First input is:" . $add . " hour" . "<br>";
      echo "Second input is:" . $add1 . " hour";
      echo "<br>";

      echo "total result is:" . $add - $add1 ." hour";
      echo "</b>";
    
    }
    }
}

$obj = new Calculation();



