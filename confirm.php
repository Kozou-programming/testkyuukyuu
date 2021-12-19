
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Member</title>
</head>
<body>
    <!-- プロフィールデータを取得 -->
<div class="verification">
<p>下記の内容で登録してよろしいですか</p>
<p>
<?php echo
    $profiles = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'pass' => $_POST['pass']
    ];
    foreach ($profiles as $profile) {
        echo $profile .'<br>';
    }
    ?>
</p>
<form action="complete.php" method="post">
    <button type="submit" name="add">登録する</button>
</form><br>

<form action="member.php" method="post" name="fix">
    <button type="submit">修正する</button>
</form><br>
</div>
</body>
</html>