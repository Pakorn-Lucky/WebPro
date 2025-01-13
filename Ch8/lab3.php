<?php
function add($n1,$n2=0){
    $result = $n1 + $n2;
    echo "Result Add : ".$result;

}

function subtract($n1,$n2=50){
    $result = $n1 - $n2;
    echo "Result subract : ".$result;

}

function multiply($n1,$n2){
    $result = $n1 * $n2;
    return $result;
}
function divide($n1,$n2,&$result){
    $result = $n1 / $n2;
    
}

$num1=10;
$num2= 10;
echo $num1."+".$num2." =";
//echo $num1."<br>";
add($num1,$num2);

//add($num1);
echo "<br><br>".$num1."-".$num2." =";
subtract($num1);

echo "<br><br>".$num1."*".$num2." =";
$resultMuntiply= multiply ($num1,$num2);
echo " Result Multiply: ".$resultMuntiply;

echo "<br><br>".$num1."/".$num2." =";
divide($num1,$num2,$resultdivide);
echo " Result Divide: ".$resultdivide;
?>