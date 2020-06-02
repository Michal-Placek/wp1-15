<?php
 
$submit = filter_input(INPUT_POST, 'submit');
 
$paste = filter_input(INPUT_POST, 'paste');
$ham = filter_input(INPUT_POST, 'ham');
$cheese = filter_input(INPUT_POST, 'cheese');
$tomato = filter_input(INPUT_POST, 'tomato');
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Generátor pizzy</h1>
    <form action ="index.php" method="post">
        <h2>Typ těsta</h2>
        <label for="gluten-free">Bezlepkové</label>
        <input type="radio" name="paste" id="gluten-free" value="gluten-free">
        
        <label for="normal">Normální</label>
        <input type="radio" name="paste" id="normal" value="normal">

        <br>
        <br>
        <h2>Přílohy</h2>
        <label for="ham">Šunka</label>
        <input type="checkbox" name="ham" id="ham">

        <label for="cheese">Sýr</label>
        <input type="checkbox" name="cheese" id="cheese">

        <label for="tomato">Rajče</label>
        <input type="checkbox" name="tomato" id="tomato">

        <br>
        <br>
        <input type="submit" value="Objednat pizzu">
    </form>

</body>
</html>