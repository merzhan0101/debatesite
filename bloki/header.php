<header>
    <!-- Шапка сайта -->
    <div id="lgt">
        <a href="/" title="Домой">
            <span>Г</span>лавная
        </a>
    </div>
    <div id="menuBas">
        <a href="/about.php">
            <div style="margin-right: 5%">О нас</div>
        </a>
        <a href="/feedback.php">
            <div>Обратная связь</div>
        </a>
        <a href="/news.php">
            <div>Новости клуба</div>
        </a>
        <a href="/achievements.php">
            <div>Достижения клуба</div>
        </a>
        <a href="/adamdars.php">
            <div>Состав</div>
        </a>
    </div> 
    
    <!-- первый вариант -->
    <div id="regAuth">
    <?php if(isset($_SESSION['user'])):?>
        привет <?=$_SESSION['user']['fio']?> | <a href="../logout.php">Выйти</a><!-- session->берет фио с юзер -->
    <?php else:?>
        <a href="/reg.php">Регистрация</a> | <a href="../auth.php">Авторизация</a> 
    <?php endif;?>
    <div>
</header>


