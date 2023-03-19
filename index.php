<?php
  require "var.php";
  require_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="script.php" method="GET">
        <input type="text" name="username" placeholder="Username">
        <button>Send</button>
    </form>

    <?php
    //   $link = [
    //     'title' => 'Главная',
    //     'link' => '/index.php'
    //   ];
    $a = 1;
    $b = 'dsf';
    // print_r($GLOBALS["headerMenu"]);
    // $aaa = showMenu([]);
    // print_r($aaa);
    // print_r($_SERVER);
    $showHeader = true;
    ?>
    <?php
        // if ($lightTheme) {
            include "header.php";
        // } else {
            // include "dark-header.php";
        // }
    ?>

    <?php if (0 && isset($menu) && is_array($menu)) { ?>
        <ul>
            <?php foreach($menu as $item) { ?>
                <li>
                    <a href="<?= $item['link'] ?>">
                        <?= $item['title'] ?>
                    </a>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
    
    <!-- <ul>
        <li>
            <a href="/index.php">Главная</a>
        </li>
        <li>
            <a href="/services.php">Услуги</a>
        </li>
        <li>
            <a href="/products.php">Товары</a>
        </li>
        <li>
            <a href="/about.php">О нас</a>
        </li>
        <li>
            <a href="/contacts.php">Контакты</a>
        </li>
    </ul> -->
    <h1>Body</h1>
    <?php showMenu() ?>

    <h1>Footer</h1>
    <?php showMenu($footerMenu); ?>
</body>
</html> 