<?php 
//データベースに接続
function db_open(): PDO
{
    $user = "root";
    $password = "mariadb";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false
    ];
    $dbh = new PDO('mysql:host=localhost; dbname=test', $user, $password, $opt);
    return $dbh;
}

//会員情報をデータベースに登録

$dbh = db_open();

    $sql = $dbh->prepare("INSERT INTO member(id, name, pass)VALUES(NULL, :name, :pass)");
    $sql->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $sql->bindValue(':pass', $_POST['pass'], PDO::PARAM_STR);
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
<a href="menu.php">戻る</a>
</body>
</html>