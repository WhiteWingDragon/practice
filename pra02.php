<style>
    table,td{
        color:blueviolet;
        border: 1px solid black;
        border-collapse: collapse;
    }
    td{
        border: 1px solid gainsboro;
        padding: 5px 10px;
    }
    td:nth-child(2n){
        background-color: lightblue;
    }
    tr:nth-child(2n){
        background-color: lightgray;
    }
</style>
<h1>99乘法</h1>
<?php
echo "<table>";
for($i=1;$i<=9;$i++){
         echo"<tr>";
 for($j=1;$j<=9;$j++){
         echo "<td";
     if($j%2==0){
         echo" style='background:lightyellow'";
     }
     echo">";
     echo"{$i}x{$j}=";
     echo $i*$j;
     echo "</td>";
 }
echo "</tr>";
}
echo"</table>";

?>


<?php
echo"<table>";
for($i=0;$i<10;$i++){
        echo"<tr>";
  for($j=0;$j<10;$j++){
    if($i==0){
        echo"<td>$j</td>";
    }else if($j==0){
        echo"<td>$i</td>";
    }else if($i==0&&$j==0){
        echo"<td>&ensp</td>";
    }else{ 
    echo "<td>";
    echo $i*$j;
    echo"</td>";
    }
  } 
echo"</tr>";
}
echo"</table>";