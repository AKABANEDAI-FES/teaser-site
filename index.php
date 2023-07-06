<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="static/favicon.ico" />
    <link rel="stylesheet" href="static/css/index.css">
    <title>第７回 赤羽台祭</title>
</head>
<body>
    <?php
    $picture = array(
        array('inya.png', 'illustrated by はう'),
        array('pacchinya2.jpg', 'illustrated by はう'),
        array('monument.jpg', 'photo by 赤羽台祭 実行委員会'),
        array('stage.jpg', 'photo by 赤羽台祭 実行委員会'),
        array('stamp.PNG', 'photo by 赤羽台祭 実行委員会'),
        array('welcome.PNG', 'photo by 赤羽台祭 実行委員会'),
        array('wellb.jpg', 'photo by 赤羽台祭 実行委員会')
    );
    $select = $picture[rand(0, count($picture)-1)];
    $select_picture = $select[0];
    $select_name = $select[1];
    ?>
    <div class="container">
        <div class="campus">
            <img src="static/img/<?php echo $select_picture; ?>" alt="logo">
            <p><?php echo $select_name; ?></p>
        </div>
        <div class="title">
            <p>東洋大学赤羽台キャンパス大学祭</p>
            <h1>第７回 赤羽台祭</h1>
        </div>
        <div class="date">
            <h2>2023.11.4 <span>(Sat.)</span> , 5 <span>(Sun.)</span></h2>
        </div>
        <div class="content">
            <p>今年度のWebサイトを頑張って作っています。<br>公開までお待ちください。</p>
            <p><a href="/02">昨年度のサイトを見る</a></p>
        </div>
        <div class="footer">
            <p>©︎ 2023 赤羽台祭 実行委員会</p>
        </div>
    </div>
</body>
</html>