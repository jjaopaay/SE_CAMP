<html>
     

<head>
<body style='background-color:pink'>

    <meta charset="utf-8">
    <style>
        div {
            width: 200px;
            height: 380px;
            border: 1px solid black;
            overflow: scroll;
            }
    </style>
</head>
<center>
<body>
    <?php $multix = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div> 
        <?php for($i = 1; $i <= 24; $i++) {?>
            <?php echo $multix ?> x <?php echo $i ?> = <?php echo $multi_x*$i ?><br>
        <?php } ?>
    </div>
</body>
    </center>


</html>