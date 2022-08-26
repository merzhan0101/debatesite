<?php require_once "functions/functions.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        require_once "bloki/head.php";
        $news = getAbout_us(4);
        $title = $news["title"];
    ?>
</head>
<body>
    <?php require_once "bloki/header.php" ?>
<div id = "wrapper">
    <div id="leftCol">
        <div id="aboutus">
        <h2>WELCOME TO DC PRESIDENT</h2><br />
            <p>Қазақ және орыс лигасына қабылдау ашық деп жариялаймыз.
Егер де сіз:
— өз ойыңызды еркін жеткізіп, ораторлық қабілетіңізді дамытқыңыз келсе;
— сыни ойлау қабілетіңізді дамытуды қаласаңыз;
— қызықты орта тауып, Қазақстанның қалаларына саяхаттап, турнирлерге қатысқыңыз келсе, біз сізді университетіміздегі «PRESIDENT» пікірсайыс клубына шақырамыз!

Барлық сұрақтар бойынша direct-ке жазсаңыз болады
<br /><br />
Объявляем набор в казахскую и русскую лигу
Если вы:
—хотите свободно выражать свои мысли и развивать ораторские способности;
—хотите развить свое критическое мышление;
—если вы хотите найти интересную обстановку, путешествовать по городам Казахстана и участвовать в турнирах, мы приглашаем вас в дебатный клуб «PRESIDENT» !

По всем вопросам пишите в direct</p>
            <?php for($i = 0; $i < count($news); $i++){?>
                <?php if($i == 0) {?>
                    <div id="bigArticle">
                <?php } else { ?>   
                    <div class="article">
                <?php } ?>
                <img src="/image/news/<?=$news[$i]["id"]?>.jpg" alt="Раздел 1.<?=$news[$i]["id"]?>" title="Раздел 1.<?=$news[$i]["id"]?>">
                    <h2><?php $news[$i]["title"]?><h2>
                <p><?= $news[$i]['intro_text']?></p>
                    <a href="/article.php?id=<?= $news[$i]["id"]?>&category=<?=$news[$i]["categ"]?>"> 
                        <div>Подробнее</div>
                    </a>
                </div>
                <?php if($i == 0) {?>
                    <div class="clear"><br /></div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>
    <?php require_once "bloki/rightCol.php" ?>
</div>
    <?php require_once "bloki/footer.php" ?>       
</body>
</html>