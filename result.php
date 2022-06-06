<?php

if(isset($_POST['result'])){
    $first_input = $_POST['input1'];
    $second_input = $_POST['input2'];
    $diff = abs(strtotime($first_input) - strtotime($second_input));

    $week = floor($diff / (7*60*60*24));
    $days = floor(($diff - $week * 7*60*60*24) / (60*60*24));
    $hours = floor(($diff - $week * 7*60*60*24 - $days*60*60*24)/ (60*60));

    printf("%d week, %d days, %d hours\n", $week, $days, $hours);
}

