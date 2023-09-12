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
        <input type="number" name="number" placeholder="Enter Your Marks" required >
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        if($number >= 90 && $number <= 100){
            echo "Grade A";
        }
        elseif($number >= 80 && $number <= 89){
            echo "Grade B";
        }
        elseif($number >= 70 && $number <= 79){
            echo "Grade C";
        }
        elseif($number >= 60 && $number <= 69){
            echo "Grade D";
        }
        elseif($number >= 50 && $number <= 59){
            echo "Grade E";
        }
        elseif($number >= 0 && $number <= 49){
            echo "Grade F";
        }
    }
    ?>
</body>
</html>