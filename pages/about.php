<div id="main">
<?php
echo "ABOUT";
$tcolor = "Серо-коричневый с оттенком лояльности";
$tbl = new table();
$tbl->setTablecolor($tcolor);
echo  "<br> <br>";
echo $tbl->putTableColor();
echo "<br><br>";
$tbl->tablesize=120;
echo $tbl->tablesize;
echo "<br><br>";
echo $tbl::putTableLocation();
echo "<br><br>";
$tbl::changeTableLocation("На Венере");
echo $tbl::$tablelocation;
echo "<br><br>";
echo square::$location;
$sqr = new square();
echo "<br><br>";
echo $sqr->putColor();
echo "<br><br>";
echo $szz;
echo "<br><br>";
?>
</div>
