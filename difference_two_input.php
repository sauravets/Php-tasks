<?php
include 'result.php';
$obj->time_difference();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Difference calculation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="script.js"></script>

</head>

<body>
    <h1 class="text-center">Calculate The Differnce Between Two Dates</h1>
    <div class="container">
    <form action="" method="POST" id="myForm">
        <div class="form-group">
            <label for="first_input">Input1:</label>
            <input type="text" name="input1" id="first_input" class="form-control inputs" value="<?php if (
     isset($_POST['first_input']) && !empty($_POST['first_input'])) { echo $first_input; } ?>" placeholder="Type First Value"><br>
        </div>
        <div class="form-group">
            <label for="second_input">Input2:</label>
            <input type="text" name="input2" id="second_input" class="form-control inputs" placeholder="Type Second Value"><br>
        </div>
        <button type="submit" name="result" class="btn btn-primary" id="result_btn" disabled = "disabled" >Result</button>
    </form>
    </div>
</body>

</html>