<?php
/**
 * Created by PhpStorm.
 * User: losso
 * Date: 09.03.2016
 * Time: 2:06
 */

include ROOT.'/app/views/layouts/header.php';

?>

<?php
include ROOT.'/app/views/layouts/cabinet_menu.php';
?>
    <script src="/app/views/JavaScript/calendar.js"></script>
    <link href="/app/views/CSS/cal.css" rel="stylesheet" type="text/css" />
    <div id="cabinet_content">


        <div>
            <form action="/upload/main" method="post" enctype="multipart/form-data">
                Тема/названия работы<br>
                <input type="text" autofocus placeholder="Тема" required="required" name="theme"/><br>
                <input type="file" name="uploadfile" required="required"><br>
                <label>Направление</label><br>
                <select  name="type">
                    <?php
                    $categories = array();
                    $categories = Subject::getCategorySubject();
                    foreach ($categories as $row)
                        echo" <option value=\"$row[type_id]\">$row[type]</option>"
                    ?>
                </select><br>
                <label>Предмет</label><br>
                <select name="subject">
                    <option value="subject1">Вибирите направление</option>
                </select><br>
                <label for="type">Тип работы</label><br>
                <select name="attribute">
                    <option value="lab">лабараторноя</option>
                    <option value="ref">реферат </option>
                    <option value="doc">доклад или сообщение </option>
                    <option value="kurs">курсовая работа</option>
                    <option value="dipl">дипломная работа</option>
                    <option value="other">другие материалы</option>
                </select><br>
                <label for="pages">Кол-во страниц:</label><br>
                <input type="number" min="0" max="1000" step="1" name="page"/><br>
                Дата написания<br>
                <input id="calendar" name="date" value="" type="text"/><br>
                <input type="radio" name="language" value="ru" checked> Русский<br>
                <input type="radio" name="language" value="ua"> Украинский<br>
                <input type="radio" name="language" value="etc"> Другой <br>
                    <textarea maxlength
                              ="1024" cols="25" rows="10" name="description">Описание работы</textarea><br>
                Цена работи(руб.)(10% комисия)<br>
                <input type="number" min="0" max="100000" name="price" step="1"/><br>
                <input type="reset" value="сброс"/><input type="submit" value="Загрузить"/>

            </form>

        </div>
    </div>
<?php include ROOT . '/app/views/layouts/footer.php'; ?>