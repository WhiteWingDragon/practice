<?php
define('PI',3.14);


$name="星街彗星";
$pric=1000;
$total=110*$pric;
echo $name;
echo "<br>";
echo $pric;
echo "<br>";
echo $total;
echo "<br>";

$name="櫻巫女";
$pric=900;
$total=10*$pric;
echo $name;
echo "<br>";
echo $pric;
echo "<br>";
echo $total;
echo "<br>";


echo PI;
echo "<br>";
echo PI*30*30;
?>

<h1>運算子</h1>
<h3>一元運算子</h3>
<?php
$a=true;
echo !$a;
echo "hr";
$b=1;
//$b=$b+1 ,$b=$b-1
echo ++$a;
echo --$a;
?>
<h3>二元運算子</h3>
<h3>二元運算子</h3>
<?php
$a=10;
$b=100;

echo $a!=$b;

?>
<h3>三元運算子</h3>
<h3>交換變數</h3>
<?php
$a=10;
$b=50;

$tmp=$a;
$a=$b;
$b=$tmp;
echo 'a='.$a;
echo "<br>";
echo 'b='.$b;

//$a=50;$b=10
?>

