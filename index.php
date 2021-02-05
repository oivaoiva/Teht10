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
        .content {
            position: relative;
            max-width: 300px;
            margin: auto;
            background: white;
            padding: 10px 40px 30px
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
        input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=submit] {
        width: 100%;
        background-color: #ff8000;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }
    </style>
</head>
<body>

<div class=content>
<p class="kysely"> 
<header><?php include 'header.php';?></header>

</p>
<iframe src="https://giphy.com/embed/aBcsaAYpBEtLW" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
<footer><?php include 'footer.php';?></footer>
</div>
</body>
</html>