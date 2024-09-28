<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <P>
    <?php
    $personal_data = ['id' => '1', '名前' => '侍太郎', '年齢' => 30];
    foreach ($personal_data as $key => $value) {
        echo "{$key} : {$value}<br>";
    }


    ?>
    </p>
</body>
