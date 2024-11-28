<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php 
        function calculateArea($width, $height) {
            return $width * $height;
        }

        $width = 5;
        $height = 10;
        $area = calculateArea($width, $height);
    ?>

    <h1>Area Calculation</h1>
    <p>The area of a rectangle with width <?php echo $width; ?> and height <?php echo $height; ?> is: <strong><?php echo $area; ?></strong></p>
</body>
</html>
