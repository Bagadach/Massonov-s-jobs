<?php
if (!isset($_SESSION)) {
    var_dump($_GET);
}
?>

<form method="get" action="homework 4.php">
    Имя: <input type="text" name = "name">
    Возраст: <input type="text" name = "age">
    <button type="submit">отправить</button>
</form>

<?php
if (!isset($_SESSION)) {
    var_dump($_POST);
}
?>
<form method="post" action="homework 4.php">
    <div>
        Первый ученик:<br> ФИО: <input type="text" name="first">
    </div>
    <hr>
    <div>
        Второй ученик:<br> ФИО: <input type="text" name="second">
    </div>
    <hr>
    <div>
        Третий ученик:<br> ФИО: <input type="text" name="third">
    </div>
    <hr>
    <div>
        Четвертый ученик:<br>  ФИО: <input type="text" name="fourth">
    </div>
    <hr>

    <button type="submit">отправить</button>
</form>