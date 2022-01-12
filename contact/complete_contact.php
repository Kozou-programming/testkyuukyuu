<?php 

require_once '../inc/functions.php';
//require_once __DIR__ . '/inc/functions.php';
$dbh = db_open();
//問い合わせ情報をデータベースに登録
    $sql = $dbh->prepare("INSERT INTO contact(number, name, mail, contents)VALUES(NULL, :name, :mail, :contents)");
    $sql->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
    $sql->bindValue(':mail', $_POST['mail'], PDO::PARAM_STR);
    $sql->bindValue(':contents', $_POST['contents'], PDO::PARAM_STR);
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
<p>送信しました</p>
</body>
</html>