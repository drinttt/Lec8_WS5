<html>
<head>
    <meta charset="UTF-8">
    <style>
        .mid {
            text-align: center;
            background-color: lightgray;
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 3%;
        }
        .box {
            text-align: center;
            padding: 2%;
            display: inline-block;
        }
        a, a:visited {
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
<?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
?>
<?php
    while($row = $stmt->fetch()){
?>
    <div class="box">
        <a href="workshop5.2.php?username=<?=$row["username"]?>">
            <img src='member_photo/<?=$row["username"]?>.jpg' width="100">
            <br><?=$row["name"]?>
        </a><br>          
    </div>
<?php
    }
?>
</body>
</html>