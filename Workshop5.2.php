<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        .mid {
            display: flex;
            margin-top: 3%;            
            margin-left: 30%;
        }        
        .text {
            display: inline-block;
            font-size: 150%;
            padding-top: 7%;
            padding-left: 2%;
        }        
    </style>
</head>
<body>
<?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>
    <div class = "mid">        
        <img src='member_photo/<?=$row["username"]?>.jpg' width="200">        
        <div class="text">
            ชื่อสมาชิก : <?=$row["name"]?><br>
            ที่อยู่ : <?=$row["address"]?><br>
            อีเมล : <?=$row["email"]?><br>
        </div>
    </div>
</body>
</html>