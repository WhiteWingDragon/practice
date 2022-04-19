<h1>流程結構</h1>
<h3>if...else</h3>
<?php
$score=61;
echo "成績=".$score;
echo "<br>";
if($score>=80){
    echo"及格，恭喜非常好";
 }else
if($score>=60){
   echo"及格，恭喜低空飛過";
}else if($score>=30){
   echo"不及格，準備補考";
}else {
    echo "不及格，下學期見";
}
//
?>

<h3>switch...case</h3>
<?php
$score=40;
$leve1=($score>100 || $score<0)? 5 : floor($score/25) ;
echo $leve1;
/* if($score >=85){
    $leve1='A;
}
/else if($score >=60){
    $leve1='B;
}
/else if($score >=30){
    $leve1='C;
}else
    $leve1='D;
} */

switch($leve1){
    case 4://100~
    case 3://75~99
        echo "表現優異，請繼續保持";
    break;
    case 2://50~74
        echo "值得肯定，還有進步空間";
    break;
    case 1://25~49
        echo "需要更多練習";
    break;
    case 0://0~24
        echo "需要加強基本功";
    break;
    default:
        echo "輸入錯誤，請重新輸入";
}
?>

<h3>閏年的判斷</h3>
<?php
$year=2024;
echo '年=>'.$year. "<br>";

if((($year% 400 == 0)&&($year %100 != 0))||($year %4 == 0)){
    echo"這是閏年";
} else{
    echo"這是平年";
}
?>

