<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even or Odd Checker</title>
</head>
<body>
    <h1>Even or Odd Checker</h1>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter Your Number" required>
        <input type="submit" name="submit">
    </form>



    <?php
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        if($number % 2 == 0){
            echo "Your Number is Even";
        }
        else{
            echo " Your Number is Odd";
        }
    }
    ?>
</body>
</html>