<?php
/**
 * Created by PhpStorm.
 * User: losso
 * Date: 09.03.2016
 * Time: 2:06
 */

include ROOT . '/app/views/layouts/header.php';

?>

<?php
include ROOT . '/app/views/layouts/cabinet_menu.php';
?>
    <div id="cabinet_content">


        <div>
            <form action="/cabinet/upload" method="post" enctype="multipart/form-data">
                Тема/названия работы<br>
                <input type="text" autofocus placeholder="Тема" required="required" name="theme"/><br>
                <input type="file" name="uploadfile" required="required"><br>
                <label>Направление</label><br>
                <select name="type">
                    <?php
                    $categories = array();
                    $categories = Subject::getCategorySubject();
                    foreach ($categories as $row)
                        echo " <option value=\"$row[type_id]\">$row[type]</option>"
                    ?>
                </select><br>
                <label>Предмет</label><br>
                <select name="subject">
                    <option value="103">Вибирите направление</option>
                </select><br>
                <label>Тип работы</label><br>
                <select name="attribute">
                    <option value="2">лабараторноя</option>
                    <option value="3">реферат</option>
                    <option value="4">доклад или сообщение</option>
                    <option value="5">курсовая работа</option>
                    <option value="6">дипломная работа</option>
                    <option value="1">другие материалы</option>
                </select><br>
                <label for="pages">Кол-во страниц:</label><br>
                <input required="required" type="number" min="0" max="1000" step="1" name="page" value="0"/><br>
                Год сдачи<br>
                <input type="number" min="1960" max="2025" name="date" step="1" value="2016"/><br>
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