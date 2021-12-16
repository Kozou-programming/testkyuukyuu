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
    <h2>会員一覧</h2>
<?php
require_once 'functions.php';

try {
    
    

    //会員情報を表示
    
?>
    <table class="member">
    <tr>
        <th>ID</th><th>姓</th><th>名</th><th>フリガナ（姓）</th><th>フリガナ（名）</th><th>住所１</th><th>住所２</th><th>住所３</th>
    </tr>
    <?php while($row = $statement->fetch()):?>
    <tr>
        <td><?php echo str($row['id'])?></td>
        <td><?php echo str($row['firstName'])?></td>
        <td><?php echo str($row['lastName'])?></td>
        <td><?php echo str($row['furiganaFirstName'])?></td>
        <td><?php echo str($row['furiganaLastName'])?></td>
        <td><?php echo str($row['address1'])?></td>
        <td><?php echo str($row['address2'])?></td>
        <td><?php echo str($row['address3'])?></td>
    </tr>
    <?php endwhile ?>
</table>

<?php
}catch(PDOException $e){
    echo "エラー".str($e->getMessage())."<br>";
    exit;
}

?>
</body>
</html>