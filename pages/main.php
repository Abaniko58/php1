<div id="main">
    <?php
    echo "Main";
    echo "<br>";
    // подключаемся к серверу
    require_once 'connection.php';

    $link = mysqli_connect($host, $user, $password, $database,3306) or die("Ошибка " . mysqli_error($link));
    $link ->set_charset("utf8");
    echo "<br>";
    // выполняем операции с базой данных
    // выполняем операции с базой данных
    $query ="SELECT * FROM bookdata WHERE author = \"Достоевский Ф.М.\"";
    // $mysqli->set_charset("utf8");
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    if($result)
    {
        echo "Выполнение запроса прошло успешно";
    }
    echo "<br>";

    foreach ($result as $ir) {
        foreach ($ir as $irr) {
            echo $irr;
            echo "<br>";
        }
    }

    // закрываем подключение
    mysqli_close($link);
    ?>
</div>