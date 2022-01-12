<?php
require_once '../inc/functions.php';

if (empty($_GET['id'])) {
    echo "idを指定してください";
    exit;
}
if (!preg_match('/\A\d{1,11}+\z/u', $_GET['id'])) {
    echo "idが正しくありません";
}
$id = (int) $_GET['id'];
$dbh = db_open();
$sql = 'SELECT * FROM member WHERE id = :id';
$stmt = $dbh->prepare($sql);
$stmt->bindParam(":id", $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$result) {
    echo "指定のデータはありません";
    exit;
}

$name = str2html($result['name']);
$pass = str2html($result['password']);


$html_form = <<<EOD
<form action="./update.php" method="post" name="update">
<p>
    <label for="name">名前:</label>
    <input type="text" name="name" value="$name">
</p>
<p>
    <label for="password">パスワード:</label>
    <input type="text" name="password" value="$password">
</p>
<p class="button" >
    <input type="hidden" name="id" value="$id">
    <input type="submit" value="送信する">
</p></p>
</form>
EOD;
echo $html_form;