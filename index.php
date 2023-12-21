

<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1><?php echo "Hello World<br><br>" ;?></h1>
        <?php echo "<h1>Hello World<br><br></h1>" ?>
        <?php $var_a = "SE CAMP" ?>
        <?php echo $var_b = 'Hello $var_a' ?>
        <br>
         <?php echo $var_c = "Hello $var_a" ?>
         <br>
         <?php 
         $var_c = $var_b =1;
         if($var_b === $var_c) {
            echo'$var_0b === $var_c';

         }else if($var_b <> $var_c){
echo'$var_b <> $var_c';
         }else {
            echo 'else';
         } ?>
         
    </body>
</html> 