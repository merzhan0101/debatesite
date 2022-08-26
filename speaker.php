<?php require_once "functions/functions.php"; ?>
<!DOCTYPE html>
<html lang="ru">
<head>
<?php
    require_once "bloki/head.php";
    $speaker = getOneAdam($_GET["id"]);
    $title = $speaker["title"];
?>
</head>
<body>
    <?php require_once "bloki/header.php" ?>
<div id="wrapper">
    <div id="leftCol">

        <div id="bigArticle"><img src="<?=$speaker["avatar"]?>" alt="Раздел 1.<?=$speaker["id"]?>" title="Раздел 1.<?=$speaker[$i]["id"]?>">
            <h2><?=$speaker["title"]?></h2>
            <p><?=$speaker['full_text']?></p>
        </div>
    </div>
    <?php require_once "bloki/rightCol.php" ?>
</div>
    <?php require_once "bloki/footer.php" ?>
</body>
