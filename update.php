<?php
require_once 'functions.php';


if(empty($_POST['id'])){
    echo "IDを指定してください";
    exit;
}
if(preg_match('/\A\d{10}\z/u', $_POST['id'])){
    echo "適切なIDではありません";
    exit;
}
if(empty($_POST['name'])){
    echo '名前は必須です';
    exit;
}




//会員情報を取得
try{
$dbh = db_open();
$id =  (int)$_POST['id'];
$name =  $_POST['name'];
$pass =  $_POST['pass'];
$sql = "UPDATE member SET name = :name, pass = :pass WHERE id =:id";
$stmt = $dbh->prepare($sql);
$stmt->bindParam(':name',$name, PDO::PARAM_STR);
$stmt->bindParam(':id',$id, PDO::PARAM_INT);
$stmt->bindParam(':pass',$pass, PDO::PARAM_STR);

$stmt->execute();
// $result = $stmt->fetch(PDO::FETCH_ASSOC);
}catch(PDOException $e){
    echo $e;
}
if(!$result){
    echo "データなし";
    echo $stmt;
    exit;
    
}
echo "更新しました";

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
    
</body>
</html>