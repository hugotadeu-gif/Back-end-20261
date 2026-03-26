<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);//Adição:12
echo "<br>Subtração:".($a - $b);//8
echo "<br>Multiplicação:".($a * $b);//20
echo "<br>Divisão:".($a / $b);//5
echo "<br>Módulo:".($a % $b);//0
echo "<br>Exponenciação:".($a ** $b);//100
?>
<hr>
<?php
$a=10;
$b=2;
$a+=$b;
$b-=5;
echo "a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d;
$d+=$a;
echo "<br>c = ".$c;
echo "<br>d = ".$d;
$n="cinco";
$n.=$c;
echo "<br>n = ".$n;
?>
<hr>
<?php
$x = 100;
echo "x = ".++$x;//x 101
echo "<br>x final = ".$x;//
echo "<hr>";
$i=10;
echo "<br>i = $i";//10
$i++;//11
$i++;//12
++$i;//13
echo "<br>i = $i";//13
$i--;//12
--$i;//11
echo "<br>i = $i";//11

?>