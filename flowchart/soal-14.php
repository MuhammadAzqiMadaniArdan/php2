<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bil Ganjil</title>
</head>
<body>
    <div class="one" style="text-align: center;">
        <h3>Bilangan Ganjil</h3>
    <?php
for ($i=1; $i <= 50; $i++) { 
    if ($i % 2 == 1){
        echo $i." Bilangan Ganjil"."<br>";
    }
 }
    ?>
    </div>
</body>
</html>