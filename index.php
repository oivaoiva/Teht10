<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP teht 10</title>
    <style>
        body {
            background: #555;
        }   

        .content1 {
            position: relative;
            max-width: 300px;
            margin: 10px auto 10px auto;
            background: white;
            padding: 10px 30px 10px
        }
        .content2 {
            position: relative;
            max-width: 300px;
            margin: 10px auto 10px auto;
            background: white;
            padding: 10px 30px 10px
        }
        .content3 {
            position: relative;
            max-width: 300px;
            margin: 10px auto 10px auto;
            background: white;
            padding: 10px 30px 10px
        }
        .giphy-embed{
            width: 100%;
            height: auto;
        }
        p.kysely {
            text-align: center; 
            font-family: Arial, Helvetica, sans-serif;
            font-style: bold;
        }
    </style>
</head>
<body>
<div class=content1>
<header>
<p class="kysely"> 
<?php include 'header.php';?>
</p>
</header>
</div>
<div class=content2>
<iframe src="https://giphy.com/embed/aBcsaAYpBEtLW" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
</div>
<div class=content3>
<footer>
<p class="kysely"> 
<?php include 'footer.php';?>
</p>
</footer>
</div>
</body>
</html>