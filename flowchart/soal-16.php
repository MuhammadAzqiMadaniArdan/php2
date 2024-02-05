
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bil ganjil & Genap</title>
</head>
<style>
    body{
        display: flex;
        justify-content: center;
    }
    .one{
        margin: 5% 5%;
        border-radius: 50px;
        background:linear-gradient(aqua,blue);
        width: 70%;
        height: 100%;
        padding: 30px 20px;
        text-align: center;
        color: white;
        font-size:large;
    }
</style>
<body>
    <div class="one" style="text-align: center;">
        <h3>Bilangan Ganjil dan Genap dari 1-50</h3>
    <?php
for ($i=1; $i <= 50; $i++) { 
    if ($i % 2 == 1){
        echo $i." Bilangan Ganjil"."<br>";
    }
    else{
        echo $i." Bilangan Genap"."<br>";
    }
 }
    ?>
    </div>
</body>
</html>