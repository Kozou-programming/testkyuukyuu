<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $_POST['name']; ?></p>
    <p><?php echo $_POST['pass']; ?></p>

    <form action="window.php" method="post">
        <input type="text" value="<?php echo $_POST['name'];?>" name="name">
        <input type="text" value="<?php echo $_POST['pass'];?>" name="pass">
        <input type="submit" value="登録する">
    </form>
</body>
</html>