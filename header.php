<?php
// Dynamic data
$logo_url = "./assets/img/logo.png";
$nav_links_left = [
    ["label" => "About", "url" => "aboutus.php"]
];
$nav_links_right = [
    ["label" => "Register", "url" => "register.php"],
    ["label" => "Login", "url" => "login.php"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="global.css">
    <script>
        function toggleMenu() {
            const navMenu = document.querySelector('.right-side ul');
            navMenu.classList.toggle('active');
        }
    </script>
    <title>Dynamic Header</title>
</head>
<body>
    <header>
        <div class="left-side">
            <!-- Dynamic Logo -->
            <a href="index.php"><img src="<?= $logo_url ?>" alt="Logo"></a>
            <ul>
                <?php foreach ($nav_links_left as $link): ?>
                    <li><a href="<?= $link['url'] ?>"><?= $link['label'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="right-side">
            <div class="burger-menu" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <ul>
                <?php foreach ($nav_links_right as $link): ?>
                    <li><a href="<?= $link['url'] ?>"><?= $link['label'] ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </header>
</body>
</html>
