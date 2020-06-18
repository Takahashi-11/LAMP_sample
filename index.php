<? php
    $dsn = 'mysql:dbname=user;host=127.0.0.1;';
    $user = 'otsubo';
    $password = 'morijyobi';
    try {
        $dbh = new PDO($dsn, $user, $password);

        $sql = "select * from rikako";
        $result = 

        echo "接続成功\n";
    } catch (PDOException $e) {
        echo "接続失敗: " . $e->getMessage() . "\n";
        exit();
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAMP SAMPLE PAGE</title>
</head>
<body>
<div class="container">
    <?php foreach($result : $value){
        echo "<h1>$value['id'] $value
    }
    ?>
</div>
</body>
</html>
