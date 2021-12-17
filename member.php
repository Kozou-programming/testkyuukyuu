
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
    <!-- 入力画面 -->
    <h2>新規会員登録</h2>
    <form class="profile" action="kakunin.php" method="post" >
        <label for="name">名前:</label>
            <input type="text" name="name" placeholder="山田孝之">
        <label for="pass">パスワード:</label>
            <input type="text" name="pass" placeholder="123">
        <p class="button">
            <input type="submit" value="確認する">
        </p>

    </form>

</body>

</html>