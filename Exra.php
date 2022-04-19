<h2>菱形練習</h2>
<?php
$temp=0;
for($i=0;$i<10;$i++){

    if($i>5){
        $temp=$temp-1;
    }else{
        $temp=$i;
    }
    for($j=1;$j<=(4+$temp);$j++){
        if($j<=(5-$temp)){
            echo"&ensp;";
        }else{
            echo"*";
        }
    }
    echo"<br>";
}

?>

<h2>求天干地支</h2>
<pre>
    天干:甲乙丙丁戊己庚辛壬癸
    地支:子丑寅卯辰巳午未申酉戌亥
    天干地支配對:甲子、乙丑、丙寅...、甲戊、乙亥、丙子...,
</pre>
<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];

$skyland=[];

for($i=0;$i<count($sky);$i++){
    for($j=0;$j<count($land);$j++){
        $skyland[]=$sky[$i].$land[$j];
    }
}
$skyland2=[];
$year=(2022-1024);

echo $sky[$year%10] . $land[$year%12];

for($i=1024;$i<=2048;$i++){
    $year=$i-1024;
    $skyland2[$i]=$sky[$year%10] . $land[$year%12];
}

echo "<pre>";
print_r($skyland2);
echo "</pre>";

echo "西元2022年是 [".$skyland2[2022]."] 年";

?>

<h2>陣列反轉</h2>
<pre>
請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)

例：$a=[2,4,6,1,8]    反轉後    $a=[8,1,6,4,2]
</pre>
<?php
$a=[2,4,6,1,8];

for($i=0;$i<ceil(count($a)/2);$i++){
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
    echo "$i => [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";
}
print_r(array_reverse($a));

?>

<p>&ensp;</p>
<p>&ensp;</p>
<p>&ensp;</p>
<p>&ensp;</p>