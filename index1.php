<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php 
        include "classes.php";

        $Card1 = new Card("Ka", "ka.png", "Dit is Ka", "1");
        echo $Card1;

        $Card2 = new Card("Dartbord", "dartbord.jpg", "Dit is een dartbord", "2");
        $Card2 -> printCard();
    ?>
</body>
</html>