
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
    <p><?php echo $_POST['mail']; ?></p>
    <p><?php echo $_POST['contents']; ?></p>

    <form action="complete_contact.php" method="post" name="contact">
        <input type="text" value="<?php echo $_POST['name'];?>" name="name">
        <input type="text" value="<?php echo $_POST['mail'];?>" name="mail">
        <input type="text" value="<?php echo $_POST['contents'];?>" name="contents">
        <input type="submit" value="送信する">
    </form>
</body>
</html>