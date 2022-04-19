<h1>畫星星</h1>
<h2>直角三角形</h2>
<?php
echo"<table>";
for($i=0;$i<=5;$i++){

    for($j=0;$j<$i;$j++){

        echo "*";
    }

    echo"<br>";
}
?>
<h2>倒直角三角形</h2>
<?php
echo"<table>";
for($i=0;$i<=5;$i++){
    for($j=5;$j>$i;$j--){
        echo"*";
    }
    echo"<br>";
}
?>
<h2>正三角形</h2>
<?php
for($i=0;$i<5;$i++){

    for($k=7;$k>(5-$i);$k--){
        echo "&ensp;";
    }
    for($j=1;$j<(5-$i);$j++){
        echo "*";
    }
    echo"<br>";
}
?>
<h2>倒三角形</h2>
<?php
for($i=0;$i<6;$i++){

    for($k=0;$k<($i);$k++){
        echo "&ensp;";
    
    }
    for($j=9;$j>$i;$j--){

        echo "*";
    }

    echo"<br>";
}
?>
<h2>菱形</h2>
<?php
for($i=0;$i<5;$i++){

    for($k=7;$k>($i*2-1);$k--){
        echo "&nbsp;";
    }
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    echo"<br>";
}
for($i=0;$i<5;$i++){

    for($k=0;$k<($i*2);$k++){
        echo "&nbsp;";
    
    }
    for($j=9;$j>$i*2;$j--){

        echo "*";
    }

    echo"<br>";
}
?>