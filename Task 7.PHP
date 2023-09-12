<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form action="" method="post">
        <input type="number" name="number1" placeholder="Enter First Number" required>
        <input type="number" name="number2" placeholder="Enter Second Number" required>

        <select name="operation" id="">
            <option value="add">Added</option>
            <option value="sub">Subtract</option>
            <option value="mul">Multiply</option>
            <option value="div">Divide</option>
        </select>
        <input type="submit" name="submit">
    </form>


    <?php
        if(isset($_POST['submit'])){
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            $operation = $_POST['operation'];   
            if($operation == 'add'){
                echo "Result is:". $number1 + $number2;
            }
            else if($operation == 'sub'){
                echo "Result is:". $number1 - $number2;
            }
            else if($operation == 'mul'){
                echo "Result is:".$number1 * $number2;
            }
            else if($operation == 'div'){
                echo "Result is:".$number1 / $number2;
            }
            else{
                echo "Invalid Operation";
            } 

        }
    ?>
</body>
</html>