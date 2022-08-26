<?php
    require_once "functions/functions.php"
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="./image/logo.ico" rel="shortcut icon" type="image/x-icon" />
    <?php
        $title = "President DC";
        require_once "bloki/head.php";
        $news = getNews(3);
    ?>
</head>
<body>
    <?php require_once "bloki/header.php"?>
    <div id="wrapper">
        <div id="leftCol">
            <?php 
                for($i = 0; $i < count($news); $i++){
                    if($i == 0)
                        echo "<div id=\"bigArticle\">";
                    else   
                        echo "<div class=\"article\">";
                    echo '<img src="/image/news/'.$news[$i]["id"].'.jpg" alt="Раздел 1.'.$news[$i]["id"].'" title="Раздел 1.'.$news[$i]["id"].'">
                        <h2>'.$news[$i]["title"].'<h2>
                    <p>'.$news[$i]['intro_text'].'</p>
                        <a href="/article.php?id='. $news[$i]["id"].'">
                            <div>Подробнее</div>
                        </a>
                    </div>';
                        if($i == 0)
                            echo "<div class=\"clear\"><br></div>";
                }
            ?>
        </div>
        <?php require_once "bloki/rightCol.php" ?>
    </div>
    <?php require_once "bloki/footer.php" ?>
</body>
</html>