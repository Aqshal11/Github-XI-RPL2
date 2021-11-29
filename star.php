<?php
$star=5;
for($a=$star;$a>1;$a--){
for($b=$star;$b>=$a;$b--){
    echo "*";
}
echo "<br>";
}

for($a=$star;$a>0;$a--){
	for($i=1; $i<=$a; $i++){
		echo " &nbsp";
	}
	for($a1=$star;$a1>=$a;$a1--){
		echo"*";
	}
	echo"<br>";
	}

for($a=1; $a<=$star; $a++){
    for($i=1; $i<=$a; $i++){
        echo " &nbsp";
    }
    for($c=$star; $c>=$a; $c-=1){
        echo "*";
    }
    echo "<br>";
    }

    for($a=1; $a<=$star; $a++){
        for($c=$star; $c>=$a; $c-=1){
            echo "*";
        }
        echo "<br>";
        }

    
?>