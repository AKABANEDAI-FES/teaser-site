<!DOCTYPE html>
<html lang="ja">

<head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="static/favicon.ico" />
    <meta name="description" content="東洋大学赤羽台キャンパス大学祭「赤羽台祭」は、2025/11/02(日), 03(月)に開催！" />
    <meta name="keywords" content="東洋大学,大学祭,学園祭,赤羽台祭,赤羽" />
    <meta property="og:url" content="https://akabanedai-fes.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="赤羽台祭 [東洋大学赤羽台キャンパス大学祭]" />
    <meta property="og:description" content="東洋大学赤羽台キャンパス大学祭「赤羽台祭」は、2025/11/02(日), 03(月)に開催！" />
    <meta property="og:site_name" content="赤羽台祭" />
    <meta property="og:image" content="https://akabanedai-fes.com/images/ogp.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@akabanedaifes" />
    <link rel="stylesheet" href="static/css/index.css">
    <title>第９回 赤羽台祭</title>
</head>

<body>
    <?php
    $picture = array(
        array('inya.png', 'illustrated by はう'),
        array('2024wellbakabane.png', 'photo by 赤羽台祭 実行委員会'),
        array('monument.jpg', 'photo by 赤羽台祭 実行委員会'),
        array('stage.jpg', 'photo by 赤羽台祭 実行委員会'),
        array('stamp.PNG', 'photo by 赤羽台祭 実行委員会'),
        array('welcome.PNG', 'photo by 赤羽台祭 実行委員会'),
        array('wellb.jpg', 'photo by 赤羽台祭 実行委員会')
    );
    $select = $picture[rand(0, count($picture) - 1)];
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
            <h1>第９回 赤羽台祭</h1>
        </div>
        <div class="date">
            <h2>2025.11.2 <span>(Sun.)</span> , 3 <span>(Mon.)</span></h2>
        </div>
        <div class="content">
            <p>今年度のWebサイトを頑張って作っています。<br>公開までお待ちください。</p>
            <p><a href="/08">昨年度のサイトを見る</a></p>
        </div>
        <div class="footer">
            <p>©︎ 2025 赤羽台祭 実行委員会</p>
        </div>
    </div>
</body>

</html>