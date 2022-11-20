<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>
        <?php if (!empty($pageData)) {
            echo $pageData["title"];
        }
        ?>
    </title>
    <base href="/index">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<button id="sort"><p>Сортировка по отдельным заездам</p></button>
<table>
    <thead>
        <tr>
            <td>
                <p>ФИО</p>
            </td>
            <td>
                <p>Город</p>
            </td>
            <td>
                <p>Автомобиль</p>
            </td>
            <td colspan="4">
                <p>Результаты</p>
            </td>
            <td>
                <p>Итог</p>
            </td>
        </tr>
    </thead>
    <tbody>

    </tbody>
    <tfoot>

    </tfoot>
</table>
<!-- импровизированная передача данных в js-->
<script>
    var data = {
        'cars': <?php
        if (!empty($pageData)) {
            echo $pageData["cars"];
        }
        ?>,
        'attempts': <?php
        if (!empty($pageData)) {
            echo $pageData["attempts"];
        }
        ?>
    };
</script>
<script type="module" src="/js/script.js"></script>
</body>
</html>