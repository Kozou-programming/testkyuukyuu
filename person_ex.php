<?php
require_once 'functions.php';
if(empty($_GET['name'])){
    echo "名前を指定してください";
    exit;
}
$name = $_GET['name'];



//会員情報を取得
$dbh = db_open();
$sql = "SELECT * FROM member WHERE name = :name";
$statement = $dbh->prepare($sql);
$statement->bindParam(':name',$name, PDO::PARAM_STR);
$statement->execute();
$result = $statement->fetch(PDO::FETCH_ASSOC);
if(!$result){
    echo "データなし";
    exit;
    
}
echo "名前:". $result['id']."<br>";
echo "ID:" .$result['name'];

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