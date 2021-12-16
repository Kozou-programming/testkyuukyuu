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
function insert()
{
    $dbh = db_open();
    if (isset($POST['add'])) {
        $sql = "INSERT INTO member(id, name, pass)VALUES(NULL, :name, :pass)";
        echo '登録しました';
    }else{
        echo 'エラーがあります';
    }
}

//会員情報表示前の受け取り
function receive()
{
$dbh = db_open();
$sql = 'SELECT * FROM member';
$statement = $dbh->query($sql);
}

//受け取った会員情報をの要素を一つずつ表示
function view()
{
    $i = 0;
    while($row = $statement->fetch()):
    echo str($row[$i]);
    $i++;
    endwhile;
}

//登録確認画面内容


//登録完了画面表示
function answer()
{
    $answer = "";
    if ($answer = $_POST['member']) {
        echo "ご登録ありがとうございました。";
    } elseif ($answer = $_POST['']) {
        echo "送信が完了しました。";
    }
}

//XSS対策
function str(String $string): string
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

