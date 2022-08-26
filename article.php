<?php require_once "functions/functions.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<?php
    require_once "bloki/head.php";
    $news = getNews(1, $_GET["id"], $_GET["category"]);
    $title = $news["title"];
?>
</head>
<body>
    <?php require_once "bloki/header.php" ?>
<div id="wrapper">
    <div id="leftCol">

        <?php ?>
            <div id="bigArticle"><img src="/image/news/<?=$news["id"]?>.jpg" alt="Раздел 1.<?=$news["id"]?>" title="Раздел 1.<?=$news[$i]["id"]?>">
            <h2><?= $news["title"]?></h2>
            <p><?= $news['full_text']?></p>
            </div> 
        <?php ?>
    </div>
    <?php require_once "bloki/rightCol.php" ?>
</div>
    <?php require_once "bloki/footer.php" ?>
</body>
