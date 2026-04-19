<?php

$name = "";
$email = "";
$website = "";
$comment = "";
$gender = "";

$nameErr = "";
$emailErr = "";
$websiteErr = "";
$commentErr = "";
$genderErr = "";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $website = $_POST["website"];
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];

    // Name
    if(!empty($name) && strlen($name) >= 5)
    {
        echo "Name: " . $name . "<br>";
    }
    else
    {
        $nameErr = "* Name must be at least 5 characters";
    }

    // Email (using preg_match)
    if(!empty($email))
    {
        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        if(preg_match($pattern, $email))
        {
            echo "Email: " . $email . "<br>";
        }
        else
        {
            $emailErr = "* Invalid email format";
        }
    }
    else
    {
        $emailErr = "* Email is required";
    }

    // Website
    if(!empty($website))
    {
        echo "Website: " . $website . "<br>";
    }
    else
    {
        $websiteErr = "";
    }

    // Comment
    if(!empty($comment))
    {
        echo "Comment: " . $comment . "<br>";
    }
    else
    {
        $commentErr = "";
    }

    // Gender
    if(!empty($gender))
    {
        echo "Gender: " . $gender . "<br>";
    }
    else
    {
        $genderErr = "* Gender is required";
    }
}

?>