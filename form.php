<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php form validation</title>
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>

<body>

    
    <h2>PHP Form Validation Example</h2>
    <p><span class="error">*required field</span></p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
    Name:<input type="text" name="name" value="<?php echo $name; ?>">
    <span class="error">*<?php echo $nameErr; ?></span>
    <br><br>
    Email:<input type="text" name="email" value="<?php echo $email; ?>">
    <span class="error">*<?php echo $emailErr; ?></span>
    <br><br>
    Website:<input type="text" name="website" value="<?php echo $website; ?>">
    <span class="error">*<?php echo $websiteErr; ?></span>
    <br><br>
    Comment:<textarea name="comment" value="<?php echo $comment; ?>"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="female") echo "checked;"?>
    value="female">Female
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="male") echo "checked"; ?>
    value="male">Male
    <input type="radio" name="gender" <?php if(isset($gender) && $gender=="other") echo "checked"; ?>
    value="other">Other
    <span class="error"><?php echo $genderErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="submit">
    </form>
    
    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    echo "<br>";
    ?>
    <?php include 'includefile.php;'
    ?>
</body>

</html>