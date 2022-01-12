<?php 
//データベースに接続
require_once '../inc/functions.php';

$dbh = db_open();
//会員情報をデータベースに登録
    $sql = $dbh->prepare("INSERT INTO member(id, name, password)VALUES(NULL, :name, :password)");
    $sql->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $sql->bindValue(':password', $_POST['password'], PDO::PARAM_STR);
    $sql->execute();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<p>登録しました</p>
</body>
</html>