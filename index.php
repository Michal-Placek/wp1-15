<?php
$submit = filter_input(INPUT_POST, 'submit');
$dough = filter_input(INPUT_POST, 'dough');
$ham = filter_input(INPUT_POST, 'ham');
$feferones = filter_input(INPUT_POST, 'fefe');
$fish = filter_input(INPUT_POST, 'fish');
$cheese = filter_input(INPUT_POST, 'cheese');
$tomato = filter_input(INPUT_POST, 'tomato');
$mushroom = filter_input(INPUT_POST, 'mushrom');
$pineapple = filter_input(INPUT_POST, 'pine');
$salami = filter_input(INPUT_POST, 'salami');
$sea = filter_input(INPUT_POST, 'sea');
$chick = filter_input(INPUT_POST, 'chick');
$corn = filter_input(INPUT_POST, 'corn');
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
    if(isset($submit)) { ?>
 
        <h2>Potvrzení objednávky</h2>
        <p>Děkujeme za vaši objednávku, kterou vám odvezeme co nejdříve.</p>
        <p>Objednal jste si pizzu s:</p>
        <p><?= $dough ?> těsto</p>
        <?php 
        if(isset($cheese)) { ?>
            <p>se sýrem</p>
        <?php } 
        if(isset($ham)) { ?>
            <p>se šunkou</p>
        <?php } 
        
        ?>
        <?php 
        if(isset($feferones)) { ?>
            <p>s feferonkami</p>
        <?php } 

        if(isset($fish)) { ?>
            <p>s rybičkami</p>
        <?php } 
        
        ?>
        <?php 
        if(isset($tomato)) { ?>
            <p>s rajčetem</p>
        <?php } 
        if(isset($mushroom)) { ?>
            <p>s houbamy</p>
        <?php } 
        
        ?>
        <?php 
        if(isset($pineapple)) { ?>
            <p>s peklem</p>
        <?php } 

        if(isset($salami)) { ?>
            <p>se salámem</p>
        <?php } ?>

        <?php  
        if(isset($sea)) { ?>
            <p>s mořskými plody</p>
        <?php } 
        
        ?>
        <?php 
        if(isset($chick)) { ?>
            <p>s kousky kuřete</p>
        <?php } 

        if(isset($corn)) { ?>
            <p>s kukuřicí</p>
        <?php } 
        
        ?>        

        

        <?php
        }   else { ?>
            
            <form action="index.php" method="post">
        <h2>Typ těsta</h2>
        <input type="radio" name="dough" id="normal" value="normal">
        <label for="normal">Normální</label></br>
        
        <input type="radio" name="dough" id="glutenfree" value="glutenfree">
        <label for="glutenfree">Bezlepkové</label></br>
        
        <h2>Maso</h2>
                
        <input type="checkbox" name="ham" id="ham">
        <label for="ham">Šunka</label></br>
        
        <input type="checkbox" name="feferons" id="feferons">
        <label for="fefe">Feferonky</label></br>        
        
        <input type="checkbox" name="fish" id="fish">
        <label for="fish">Rybičky</label></br>       
        
        <input type="checkbox" name="cheese" id="cheese">
        <label for="cheese">Sýr</label></br>

        <input type="checkbox" name="tomato" id="tomato">
        <label for="tomato">Rajče</label></br>
        
        <input type="checkbox" name="mushroom" id="mushroom">
        <label for="mushrom">Houby</label></br>        
        
        <input type="checkbox" name="pineapple" id="pineapple">
        <label for="pine">Ananas (jako vážně?!)</label></br>       
        
        <input type="checkbox" name="salami" id="salami">
        <label for="salami">Salám</label></br>

        <input type="checkbox" name="sea" id="sea">
        <label for="sea">Mořský plody</label></br>        
        
        <input type="checkbox" name="chick" id="chick">
        <label for="chick">Kuře</label></br>       
        
        <input type="checkbox" name="corn" id="corn">
        <label for="corn">Kukuřice</label></br>

        <input type="submit" name="submit" value="Odeslat">
    </form>
      <?php  }    
    ?>
    

</body>
</html>