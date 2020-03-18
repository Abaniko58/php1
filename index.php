<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>minimarket</title>
    <meta name="description" content="Описание сайта длиной до 200 символов" />
    <meta name="keywords" content="ключевые слова для поисковика">
    <link rel="stylesheet" type="text/css" href="css/style3.css">
    <!--    <link href="http://ideasburner.com/css/main.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

</head>

<?php
class square
{
    public $size = 42;
    private $color = "red";
    public static $location = "Внутри своего дома";

       /**   public function __construct()
    {
        include 'pages/addition.php';
    }
*/
    public static function changeLocation($location)
    {
        static::$location = $location;
    }

    public static function putLocation()
    {
        echo self::$location;
    }

    public function changeColor($color) {
    $this->color=$color;
    }

    public function putColor()
    {
        return $this->color;
    }

    public function setcolor($color)
    {
        $this->color=$color;
    }

    public function __call($name, $arguments)
    {
        // Замечание: значение $name регистрозависимо.
        echo "Такого метода '$name' не существует в классе '$ '";
    }

    /**  Начиная с PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        // Замечание: значение $name регистрозависимо.
        echo "Вызов статического метода '$name' "
            . implode(', ', $arguments) . "\n";
    }

}
class table
{
    public $tablesize = 42;
    private $color = "WITE";
    public static $tablelocation = "Внутри дома";

    public static function changeTableLocation($location)
    {
        static::$tablelocation = $location;
    }

    public static function putTableLocation()
    {
        echo self::$tablelocation;
    }

    public function changeTableColor($color) {
        $this->color=$color;
    }

    public function putTableColor()
    {
        return $this->color;
    }

    public function setTablecolor($color)
    {
        $this->color=$color;
    }

}

require 'views/header.php';
$pages = ['main', 'cart', 'ledenec', 'about'];
   if (isset($_GET['page'])) {
        if (in_array($_GET['page'], $pages)){

            include 'pages/' . $_GET['page'] . '.php';

        } else {
    include 'pages/error.php';}
} else {include 'pages/error.php';}

require 'views/footer.php';


