<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>My Folder and My Page</h1>
    <h1>
        <?php echo $val_a . ' '. $val_b ;?>
    </h1>
    <h1>{{ $val_a}} {{ $val_b}}
    </h1>
    <form method="post" action="/my-controller4">
        @csrf
        <input type="text" name="myinput">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
