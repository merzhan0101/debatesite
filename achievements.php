<?php
    require_once "functions/functions.php"
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <?php
        require_once "bloki/head.php";
        $news = getAchieve(10, 'Достижения клуба');//(лимит, id, категория)
    ?>
</head>
<body>
    <?php require_once "bloki/header.php"?>
    <div id="wrapper">
        <div id="leftCol">
            <?php for($i = 0; $i < count($news); $i++){?>
                <?php if($i == 0) {?>
                    <div id="bigArticle">
                <?php } else {?>   
                    <div class="article">
                <?php }?>
                    <img src="<?=$news[$i]["img"]?>" alt="Раздел 1. <?=$news[$i]["id"]?>" title="Раздел 1.<?=$news[$i]["id"]?>">
                    <h2><?=$news[$i]["title"]?><h2>
                    <p><?=$news[$i]['intro_text']?></p>
                    <a href="/article.php?id=<?=$news[$i]["id"]?>&category=<?=$news[$i]["categ"]?>">
                        <div>Подробнее</div>
                    </a>
                </div>
                <?php if($i == 0) {?>
                    <div class="clear"><br></div>
                <?php }?>
            <?php }?>
        </div>
        <?php require_once "bloki/rightCol.php" ?>
    </div>
    <?php require_once "bloki/footer.php" ?>
</body>
</html>