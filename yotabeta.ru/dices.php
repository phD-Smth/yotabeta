<?php
include("auth.php");
?><!DOCTYPE html><html><head><title>Шансы</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css.css"></head>
<body><h1 class=head>Дайсы крутятся - Дайсы</h1><p class=menu>Welcome <?php echo $_SESSION['username']; ?>!</p><h2 class=menu><?php
$links = array(1 => '<a href="dices.php">Дайсы</a> ', 2 => '<a href="chances.php">Шансы</a> ', 3 => '<a href="home.php">Главная</a> ', 4 => '<a href="rolls.php">Броски</a> ', 5 => '<a href="index.php">Войти</a> ');
shuffle($links);foreach ($links as $key => $value) {echo $value;}unset($value);?>
</h2>
<p class=main>Здесь представлен каталог игральных костей, или дайсов, отсортированных по различным параметрам: количеству граней и распространённости. Представлены краткие описания особенностей дайсов.</p>
</body></html>