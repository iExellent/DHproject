<div id="block_left">
    <p>Поиск</p>
    <form name="some" method="POST" action="/search/index" enctype="application/x-www-form-urlencoded">
    <input type="text" name="string" maxlength="100">
    <label>Направление</label><br>
    <select  name="type">
        <option value="0">Все категории</option>
        <?php
        $categories = array();
        $categories = Subject::getCategorySubject();
        foreach ($categories as $row_cat)
            echo" <option value=\"$row_cat[type_id]\">$row_cat[type]</option>"
        ?>
    </select><br>
    <label>Предмет</label><br>
    <select name="subject">
        <option value="0">Вибирите направление</option>
    </select><br>
    <label for="type">Тип работы</label><br>
    <select name="attribute">
        <option value="0">любая работа</option>
        <option value="2">лабараторноя</option>
        <option value="3">реферат </option>
        <option value="4">доклад или сообщение </option>
        <option value="5">курсовая работа</option>
        <option value="6">дипломная работа</option>
        <option value="1">другие материалы</option>
    </select><br>
    <label for="pages">Кол-во страниц:</label><br>
    <select name="count">
        <option value="0">не важно</option><option value="0">не важно</option>
        <option value="60">более 60</option>
        <option value="50">50-60</option>
        <option value="30">30-50</option>
        <option value="20">20-30</option>
        <option value="10">менее 10</option>

    </select><br>
    <label for="age">Возраст работы:</label><br>
    <select name="age">
        <option value="0">не важно</option><option value="0">не важно</option>
        <option value="1">не более 1 года</option>
        <option value="5">не более 5 лет</option>
        <option value="10">не более 10 лет</option>
    </select><br>
    <input type="submit" value="Применить фильтр">
        </form>
</div>




