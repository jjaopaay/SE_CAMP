<!DOCTYPE html>
<html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>Document</title>
    </head>
    <table>
        <tbody>
            <body>
                <center>
                    <h1>ตารางสูตรคูณแม่ {{ $myinput }}</h1>
                    <div>
                        <?php
                        for ($i=1; $i <= 24 ; $i++) {
                            echo "{$myinput} x {$i} = ".($myinput * $i)."<br/>";
                        }
                        ?>
                    </div>
                </center>
            </body>
        </tbody>
    </table>
<style>
h1{
color: rgb(0, 0, 0);
font-size: 50px;
font-family: Sriracha;
}
body{
}
div {
font-size: 25px;
background-color:
width: 220px;
height: 380px;
Irgb(214, 171, 255);
border: 1px solid black;
overflow-y: scroll;
font-family: Sriracha;
}
div:hover {
width: 240px;
height: 400px;
background-color:
rgb(100, 119, 255);
box-shadow: 10px 5px black;
}
</style>
</html>
