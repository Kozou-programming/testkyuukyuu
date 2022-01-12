<?php 
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
 ?>