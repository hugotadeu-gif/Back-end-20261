<?php
$a="10"; // a = 10 string 
$b="10"; // a = "10" string 
echo "Igualdade = ".($a==$b)."<br>"; // true
echo "Idêntico = ".($a===$b)."<br>"; // true
echo "Não igual = ".($a!=$b)."<br>"; // false
echo "Não Idêntico = ".($a!==$b)."<br>"; // false
echo "<hr>";
$a=10;
$b=20;
$c=50;
$d=!($a<=$b);
var_dump($d);
echo "<hr>";
$e=($a<=$c)&&!($c>1000);
var_dump($e);//
echo "<hr>";
$f=($a>$b) || ($c<1000);
var_dump($f);
echo "<hr>";
$g=(!($a<$b) xor ($b<$c));
var_dump($g);//
echo"<hr>";
$d=($a<=$b) ? "verdadeiro" : "falso";
$e=($a>=$b) ? "verdadeiro" : "falso";
echo "d = $d<br>e = $e ";
?>