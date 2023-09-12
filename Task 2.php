<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form action="" method="post">
        <input type="text" name="temperature" placeholder="Enter Temperature" required>
        <select name="unit" id="">
            <option value="celsius">Celsius</option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <input type="submit" name="submit" value="Convert">
    </form>

    <?php
    
    if (isset($_POST['submit'])) {
        $temperature = $_POST['temperature'];
        $unit = $_POST['unit'];

        if ($unit == 'celsius') {
            $fahrenheit = ($temperature * 9/5) + 32;
            echo "$temperature Celsius is equal to $fahrenheit Fahrenheit.";

        } else if ($unit == 'fahrenheit') {
            $celsius = ($temperature - 32) * 5/9;
            echo "$temperature Fahrenheit is equal to $celsius Celsius.";
        }
        
    }
    
    ?>
</body>
</html>