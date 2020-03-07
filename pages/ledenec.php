<div id="main">
<h1>А я ЛЕДЕНЕЦ!!!</h1>
<?php
$testcolor = "Серо-коричневый с оттенком лояльности";
$sqr = new square();
$sqr->setcolor($testcolor);

echo "Леденцы наступают <br> <br>";
echo $sqr->putColor();
echo "<br><br>";
echo $sqr->putColor();
echo "<br><br>";
$szz = $sqr->size;
echo $szz;
echo "<br><br>";
echo $sqr::putLocation();
echo "<br><br>";
$sqr::changeLocation("На Марсе");
echo $sqr::$location;
?>
</div>
