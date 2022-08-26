<?php
    require_once "functions/functions.php"
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        require_once "bloki/head.php";
        $news = getNews(10);
    ?>
</head>
<body>
    <?php require_once "bloki/header.php"?>
    <div id="wrapper">
        <div id="leftCol">
            <?php for($i = 0; $i < count($news); $i++){?>
                    <?php if($i == 0) {?>
                        <div id="bigArticle">
                    <?php } else { ?>   
                        <div class="article">
                    <?php } ?>
                    <img src="/image/news/<?=$news[$i]["id"]?>.jpg" alt="Раздел 1.<?=$news[$i]["id"]?>" title="Раздел 1.<?=$news[$i]["id"]?>">
                        <h2><?php $news[$i]["title"]?><h2>
                    <p><?= $news[$i]['intro_text']?></p>
                        <a href="/article.php?id=<?= $news[$i]["id"]?>">
                            <div>Подробнее</div>
                        </a>
                    </div>
                        <?php if($i == 0) {?>
                            <div class="clear"><br></div>
                <?php } ?>
            <?php } ?>
        </div>
        <?php require_once "bloki/rightCol.php" ?>
    </div>
    <?php require_once "bloki/footer.php" ?>
</body>
</html>