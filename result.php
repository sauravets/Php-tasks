<?php
class Calculation
{
   public function create_string($array, $duration)
   {
      $new_string = '';
      if (!empty($array) && isset($array[0][0]) && isset($array[1][0]) && isset($array[2][0]) && isset($array[3][0])) {
         $new_string .= $array[0][0] . $array[1][0] . $array[2][0] . $array[3][0] . ".<br>";
      } else {
         $new_string = '0' . $duration;
      }
      return $new_string;
   }
   public function time_difference()
   {
      if (isset($_POST['result'])) {
         $first_input = $_POST['input1'];
         $second_input = $_POST['input2'];

         preg_match_all('((\d+(\.\d+)?)*(w))', $first_input, $week);
         preg_match_all('((\d+(\.\d+)?)*(d))', $first_input, $day);
         preg_match_all('((\d+(\.\d+)?)*(h))', $first_input, $hour);

         preg_match_all('((\d+(\.\d+)?)*(w))', $second_input, $week1);
         preg_match_all('((\d+(\.\d+)?)*(d))', $second_input, $day1);
         preg_match_all('((\d+(\.\d+)?)*(h))', $second_input, $hour1);


         // From first input
         $weeks = $this->create_string($week, 'w');
         $days = $this->create_string($day, 'd');
         $hours =  $this->create_string($hour, 'h');

         // From Second input
         $weeks1 = $this->create_string($week1, 'w');
         $days1 = $this->create_string($day1, 'd');
         $hours1 =  $this->create_string($hour1, 'h');

         $add_first_input = ((int)$weeks * 40) + ((int)$days * 8) + ((int)$hours); //add first input
         $add_second_input = ((int)$weeks1 * 40) + ((int)$days1 * 8) + ((int)$hours1); //add second input
         $result =  $add_first_input - $add_second_input;    //calculate difference      
         //calculate the week-    
         $week_result = ($result / 40);
         $round_week = round($week_result, 2);
         $substr_week = substr($round_week, 1);
         //calculate the day-
         $day_result = ($substr_week * 40) / 8;
         $round_day = round($day_result, 2);
         $substr_day = substr($round_day, 1);
         //calculate the hour-
         $hour_result = ((int)$substr_day * 8);
          
         $string = '<b> The Output Is: ';
         if (!empty($week_result) && (int)$week_result) {
            $string .= (int)$week_result . "w ";
         }
         if(!empty($day_result) && (int)$day_result){
            $string .= (int)$day_result . "d ";
         }
         if(!empty($hour_result) && (int)$hour_result){
            $string .= (int)$hour_result . "h";
         }
         echo $string. "</br>";
      }
   }
}

$obj = new Calculation();
