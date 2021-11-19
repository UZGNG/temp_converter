<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
</head>
<style>
    label{
        margin-left: 15px;
    }
</style>
<body>
<h1>Jack's Tempurature Converter</h1>
<form action="./convert.php" method="POST">
    <input type="number" name="temp" placeholder="Tempurature" required>


    <label for="fah-input">
        Fahrenheit
        <input type="radio" name="unit" value="Fahrenheit" required>
    </label>
    <label for="cel-input">
        Celsius
        <input type="radio" name="unit" value="Celsius" required>
    </label>
    <label for="ran-input">
        Rankine
        <input type="radio" name="unit" value="Rankine" required>
    </label>
    <label for="kel-input">
        Kelvin
        <input type="radio" name="unit" value="Kelvin" required>
    </label>

    <span>==&gt;&gt;</span>

    <label for="fah-output">
        Fahrenheit
        <input type="radio" name="newUnit" value="Fahrenheit" required>
    </label>
    <label for="cel-output">
        Celsius
        <input type="radio" name="newUnit" value="Celsius" required>
    </label>
    <label for="ran-output">
        Rankine
        <input type="radio" name="newUnit" value="Rankine" required>
    </label>
    <label for="kel-output">
        Kelvin
        <input type="radio" name="newUnit" value="Kelvin" required>
    </label>

    <input type="submit" value="Convert!">
</form>
<p id="hw">
    <?php 
        try{
            if(isset($_GET['temp'])) {
                echo $_GET['temp'];
            }
        } catch (Exception $e) {
        
        }

    ?>
</p>
<script>
        var request = new XMLHttpRequest()
</script>
</body>
</html>