<?php
    /** 
     * Created by: Daniel Pustjens 2023
     * 
     * PHP College 1:
     * 
     * Define variables
     * string, "Hello world"
     * boolean, true/false
     * integer, 1 10
     * float, 1.10
     * array, ["Daniel", "Jordy", "Sam"]
     * date 06/09/2023
    */

    // Sets the local time and then sets it to hours (0-23 hours).
    date_default_timezone_set("Europe/Amsterdam");
    $time = date("H");
 
    // Changes the background color between daytime and nighttime.
    if ($time > 7 && $time < 19) {
        $bg = "#9394a5";
    } else {
        $bg = "#484b6a";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?php echo $bg; ?>">
    <?php 
        // Variables about me
        $name = "Daniel Pustjens";
        $age = 22;
        $mobile =  31615601397;
        $email = "daniel.pustjens@gmail.com";
        $student = true;
        $collegeName = "Windesheim";
        $collegeStudy = "AD Software Development";
        $family = ["Father", "Mother"];
        $languages = [
            "PHP", 
            "Javascript",
            "HTML",
            "CSS",
            "C"
        ];
        $hobbies = [
            "Work-out", 
            "Game",
            "Sleep",
            "Boxing",
            "MMA"
        ];

        // Contact information about me.
        echo "Name: " . $name . "<br> Age: " . $age . "<br> Mobile: " . $mobile . "<br> Email: " . $email . "<br>";
        
        //Ternary operator for if I'm a student or not.
        echo "<br> Student: ";
        echo $student ? "Yes, I am a student." : "No, I am NOT a student.";
        echo "<br> College name: " . $collegeName . "<br> College study: " . $collegeStudy . "<br>";

        // Foreach loops to echpo all the values of the array languages, family and hobbies.
        echo "<br> Languages: <br>";
        foreach ($languages as $language) {
            echo "- " . $language . "<br>";
        }        
        
        echo "<br> Family: <br>";
        foreach ($family as $member) {
            echo "- " . $member . "<br>";
        }

        echo "<br> Hobbies: <br>";
        foreach ($hobbies as $hobby) {
            echo "- " . $hobby . "<br>";
        }
    ?>
</body>
</html>