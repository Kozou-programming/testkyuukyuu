<?php
require_once 'functions.php';

try {
    $dbh = db_open();
    
    //会員情報を挿入
    $sql = "INSERT INTO member(id, pass, firstName, lastName, furiganaFirstName, furiganaLastName,sex, houseNumber, address1, address2, address3, tel, email, addDay)VALUES(NULL, :pass, :firstName, :lastName, :furiganaFirstName, :furiganaLastName,:sex, :houseNumber, :address1, :address2, :address3, :tel, :email, :addDay)";
    $stmt = $dbh->prepare($sql);

    //入力情報をプレースホルダーに挿入
    $stmt->bindParam(":pass", $_POST['pass'], PDO::PARAM_STR);
    $stmt->bindParam(":firstName", $_POST['firstName'], PDO::PARAM_STR);
    $stmt->bindPARAM(":lastName", $_POST['lastName'], PDO::PARAM_STR);
    $stmt->bindParam(":furiganaFirstName", $_POST['furiganaFirstName'], PDO::PARAM_STR);
    $stmt->bindPARAM(":furiganaLastName", $_POST['furiganaLastName'], PDO::PARAM_STR);
    $stmt->bindParam(":sex", $_POST['sex'], PDO::PARAM_STR);
    $stmt->bindPARAM(":houseNumber", $_POST['houseNumber'], PDO::PARAM_STR);
    $stmt->bindParam(":address1", $_POST['address1'], PDO::PARAM_STR);
    $stmt->bindParam(":address2", $_POST['address2'], PDO::PARAM_STR);
    $stmt->bindParam(":address3", $_POST['address3'], PDO::PARAM_STR);
    $stmt->bindParam(":tel", $_POST['tel'], PDO::PARAM_STR);
    $stmt->bindParam(":email", $_POST['email'], PDO::PARAM_STR);
    $stmt->bindParam(":addDay", $_POST['addDay'], PDO::PARAM_STR);

    $stmt->execute();
    echo "登録しました";

        
}catch(PDOException $e){
    echo "エラー".str($e->getMessage())."<br>";
    exit;
}