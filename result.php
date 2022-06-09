<?php
class Calculation {

   public function time_difference(){
    if(isset($_POST['result'])){
       $first_input = $_POST['input1'];
       $second_input = $_POST['input2'];

       preg_match_all('((\d+(\.\d+)?)*(w))',$first_input,$week);     
       preg_match_all('((\d+(\.\d+)?)*(d))',$first_input,$day);
       preg_match_all('((\d+(\.\d+)?)*(h))',$first_input,$hour);       
       
       preg_match_all('((\d+(\.\d+)?)*(w))',$second_input,$week1);
       preg_match_all('((\d+(\.\d+)?)*(d))',$second_input,$day1);
       preg_match_all('((\d+(\.\d+)?)*(h))',$second_input,$hour1);

      //Get the value of week for first-input
      $weeks =  $week[0][0].$week[0][1].$week[0][2].".<br>";
      $week[1][0].$week[1][1].$week[1][2].".<br>";

      //Get the value of day for first-input
      $days =  $day[0][0].$day[0][1].$day[0][2].".<br>";
      $day[1][0].$day[1][1].$day[1][2].".<br>";

      //Get the value of hour for first-input
      $hours =  $hour[0][0].$hour[0][1].$hour[0][2].".<br>";
      $hour[1][0].$hour[1][1].$hour[1][2].".<br>";

      //Get the value of week for second-input
      $weeks1 =  $week1[0][0].$week1[0][1].$week1[0][2].".<br>";
      $week1[1][0].$week1[1][1].$week1[1][2].".<br>";

      //Get the value of day for second-input
      $days1 =  $day1[0][0].$day1[0][1].$day1[0][2].".<br>";
      $day1[1][0].$day1[1][1].$day1[1][2].".<br>";

      //Get the value of hour for second-input
      $hours1 =  $hour1[0][0].$hour1[0][1].$hour1[0][2].".<br>";
      $hour1[1][0].$hour1[1][1].$hour1[1][2].".<br>";

      $add = ($weeks * 40) + ($days * 8) + ($hours);
      echo "<b>";
      echo "first input value is:" . $add . "<br>";
      $add1 = ($weeks1 * 40) + ($days1 * 8) + ($hours1);
      echo "second input value is:" . $add1 . "<br>";       
      echo "total result is:" . $add - $add1 ." hour";
      echo "</b>";    
    }
    }
}

$obj = new Calculation();



