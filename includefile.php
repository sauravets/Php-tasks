<?php
    //define variables and set to empty values-
    $nameErr = $emailErr = $genderErr = $websiteErr = '';
    $name = $email = $gender = $comment = $website = '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //For Name-
        if (empty($_POST['name'])) {
            $nameErr = 'Name is required';
        } else {
            $name = test_input($_POST['name']);
        }
        //check if name only contains letter and whitespace-
        if (!preg_match("/^[a-zA-z- ]*$/", $name)) {
            $nameErr = 'only letters and whitespace allowed';
        }
        //For Email-
        if (empty($_POST['email'])) {
            $emailErr = 'Email is required';
        } else {
            $email = test_input($_POST['email']);
        }
        //check if email address is well formed-
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'only valid email allowed';
        }
        //For Website-
        if (empty($_POST['website'])) {
            $websiteErr = '';
        } else {
            $website = test_input($_POST['website']);
        }
        //check if URL syntax address is valid(this regular expression is allowed dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = 'Invalid URL';
        }

        //For comment-
        if (empty($_POST['comment'])) {
            $comment = '';
        } else {
            $comment = test_input($_POST['comment']);
        }

        //For Gender-
        if (empty($_POST['gender'])) {
            $genderErr = 'Gender is required';
        } else {
            $gender = test_input($_POST['gender']);
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    