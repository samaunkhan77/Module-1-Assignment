<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form action="" method="post">
        <input type="number" name="number1" placeholder="Enter Your Marks" required > <br><br>
        <input type="number" name="number2" placeholder="Enter Your Marks" required > <br><br>
        <input type="number" name="number3" placeholder="Enter Your Marks" required > <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $score1 = $_POST["number1"];
        $score2 = $_POST["number2"];
        $score3 = $_POST["number3"];

        $average = ($score1 + $score2 + $score3) / 3;

        if($average >= 80){
            echo "Your Grade is A";
        }
        elseif($average >= 70){
            echo "Your Grade is B";
        }
        elseif($average >= 60){
            echo "Your Grade is C";
        }
        elseif($average >= 50){
            echo "Your Grade is D";
        }
        else{
            echo "Your Grade is F";
        }


    }
    ?>
</body>
</html>