<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once 'functions.php';
    try {
        $dbh = db_open();
        $sql = 'SELECT * FROM member';
        $statement = $dbh->query($sql);
    ?>
        <table>
            <tr>
                <th>更新</th>
                <th>id</th>
                <th>name</th>
                <th>$password</th>
            </tr>
            <?php while ($row = $statement->fetch()) : ?>
                <tr>
                    <td><a href="edit.php?id=<?php echo (int) $row['id']; ?>">更新</a> </td>
                    <td><?php echo str2html($row['id']); ?></td>
                    <td><?php echo str2html($row['name']); ?></td>
                    <td><?php echo str2html($row['pass']); ?></td>
                </tr>
            <?php endwhile; ?>
        </table>
    <?php
    } catch (PDOException $e) {
        echo "エラー" . str2html($e->getMessage());
    }
    ?>
</body>

</html>