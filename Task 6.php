<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    <form action="" method="post">
        <input type="number" name="num1" placeholder="Enter First Number" required>
        <input type="number" name="num2" placeholder="Enter Second Number" required>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            if($num1 > $num2){
                echo "$num1 is greater than $num2";
            }else{
                echo "$num2 is greater than $num1";
            }
            }
        
    ?>
</body>
</html>