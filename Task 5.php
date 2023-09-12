<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <form action="" method="post">
        <input type="number" name="Temperature" placeholder="Enter Your Temperature" required>
        <input type="submit" name="submit">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $Temperature = $_POST['Temperature'];
            echo "Temperature is $Temperature  .";

            if($Temperature < 15){
                echo "It is freezing!";
            }else if($Temperature >= 15 && $Temperature <= 20){
                echo "It is Cold";
            }else{
                echo "It is Hot";
            }
          
        }
    ?>
</body>
</html>