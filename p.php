<?php
/*
$f=fopen("data.txt","r");
$r=fopen("out.txt","w");
//echo fwrite($f,"i am Padma Vasanthi Starting php coding");
//echo fread($f,filesize("data.txt"));
//echo fgets($f);
while (($ch = fgetc($f)) !== false){
        switch ($ch) {
        case 'a': $ch = 'b'; break;
        case 'e': $ch = 'f'; break;
        case 'i': $ch = 'j'; break;
        case 'o': $ch = 'p'; break;
        case 'u': $ch = 'v'; break;

        case 'A': $ch = 'B'; break;
        case 'E': $ch = 'F'; break;
        case 'I': $ch = 'J'; break;
        case 'O': $ch = 'P'; break;
        case 'U': $ch = 'V'; break;
        default:$ch=$ch;break;
    }
    fwrite($r,$ch);
}
fclose($r);
fclose($f);
$a=20;
function test(){
    global $a;
    echo $a;
    $r=5;
    echo $r;
}
test();
function mycount(){
    static $c=0;
    $c++;
    echo $c;
}
mycount();
mycount();
mycount();*/
$name="padmavasanthi";
echo "string";
echo $name;
echo "<br>";
$age=20;
echo "Integer:";
echo $age;
echo "<br>";
$price=99.75;
echo "Float:";
echo $price;
echo "<br>";
$isActive = true;
echo "Boolean (true): ";
echo $isActive; 
echo "<br>";
$colors = array("Red", "Green", "Blue");
echo "Array elements: ";
echo $colors[0] . ", " . $colors[1] . ", " . $colors[2];
?>