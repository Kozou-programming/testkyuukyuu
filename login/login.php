<?php 
session_start();
require_once __DIR__ .'/inc/functions.php';
include __DIR__ . '/inc/header.php';
?>
<form action="login.php" method="post">
    <p>
        <label for="name">ユーザー名：</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="password">パスワード：</label>
        <input type="text" name="password">
    </p>
    <input type="submit" value="送信する">
</form>
<?php
try{
    $dbh = db_open();
    $sql = "SELECT password FROM member WHERE name = :name";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":name", $_POST['name'], PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$result){
        echo "ログインに失敗しました";
        exit;
    }

    if (password_verify($_POST['password'], $result['password'])) {
        session_regenerate_id(true);
        $_SESSION['login'] = true;
        header("Location: index.php");
    }else{
        echo "ログインに失敗しました(2)";
        echo $_POST['password'];
        echo $result['password'];
    }
    
}catch(PDOException $e){
    echo "エラー";

    exit;
}

if(!empty($_SESSION['login'])){
    echo "ログイン済みです";
    exit;
}

if((empty($_POST['name'])) || (empty($_POST['password']))){
    echo "ユーサー名、パスワードを入力してください";
    exit;
}
?>
