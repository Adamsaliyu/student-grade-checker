<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student-grade-checker</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <div class="input-box">
                <h3>Enter your score</h3>
                <form action="index.php" method="post">
                    <label for="username">Username</label><br>
                    <input type="text" name="username"><br>
                    <label for="grade">Score</label><br>
                    <input type="number" name="grade"><br>

                    <button>Submit</button>
                </form>
        </div>
        <div class="output-box">

        </div>
    </div>

        </div>
        
    </div>
</body>
</html>

<?php
    $profileName = $_POST["username"];
    $userscore = $_POST["grade"];

    if( $userscore > 100){
        echo"Name : {$profileName} "."<br>";
        echo"Score : {$userscore} is not valid "."<br>";
        echo"Grade: invalid "."<br>";
        echo"Status : invalid"."<br>";
        echo"massage : Please enter a valid score"."<br>";
    }
    elseif($userscore >= 70){
        echo"Name : {$profileName} "."<br>";
        echo"Score : {$userscore} "."<br>";
        echo"Grade: A "."<br>";
        echo"Status : PASSED"."<br>";
    }
    elseif($userscore >= 60){
        echo"Name : {$profileName} "."<br>";
        echo"Score : {$userscore} "."<br>";
        echo"Grade: B "."<br>";
        echo"Status : PASSED"."<br>";
    }
    elseif($userscore >= 50){
        echo"Name : {$profileName} "."<br>";
        echo"Score : {$userscore} "."<br>";
        echo"Grade: C "."<br>";
        echo"Status : PASSED"."<br>";
    }
    elseif($userscore >= 40){
        echo"Name : {$profileName} "."<br>";
        echo"Score : {$userscore} "."<br>";
        echo"Grade: D "."<br>";
        echo"Status : PASSED"."<br>";
    }
    elseif($userscore >= 0){
        echo"Name : {$profileName} "."<br>";
        echo"Score : {$userscore} "."<br>";
        echo"Grade: F "."<br>";
        echo"Status : FAILED"."<br>";
    }
    elseif($userscore < 0){
        echo"Name : {$profileName} "."<br>";
        echo"Score : {$userscore} is not valid "."<br>";
        echo"Grade: invalid "."<br>";
        echo"Status : invalid"."<br>";
        echo"massage : Please enter a valid score"."<br>";
    }     
    else{
        echo"Invalid result";
    }
    
    

?>