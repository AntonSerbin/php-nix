<?php
if ($_POST) {
    echo "<br>";
    $quizNumber = rand(5, 8);
    echo "Было загадано число $quizNumber, а вы указали " . $_POST["numberForm"] . ". <br>";

    if ($_POST["numberForm"] < 5) {
        echo "число маленькое<br>";
    } elseif ($_POST["numberForm"] > 8) {
        echo "число БОЛЬШОЕ<br>";
    } elseif ($_POST["numberForm"] == $quizNumber) { ?>
        <?= "УРА! Вы угадали!<br>"; ?>
        <br>
        <a href="form.php">Играть еще!</a>
        <?php
    } elseif ($_POST["numberForm"] >= 5 && $_POST["numberForm"] <= 8) {
        echo "Почти угадали! <br>"; ?>
        <br>
        <a href="form.php">Попробуйте еще!</a>
        <?php
    };
}
?>
