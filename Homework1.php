//1 task
<?php
$value1=3.65;
$value2=6.65;
$value3=-11.54;
var_dump(round($value1,1,PHP_ROUND_HALF_UP));
var_dump(round($value2,1,PHP_ROUND_HALF_DOWN));
var_dump(round($value3,1,PHP_ROUND_HALF_ODD));
?>
//2 task
<?php
$value1=rand(1,30);
$value2=rand(1,30);
$answer='';
$Add=1;
$Substitute=2;
$Multiply=3;
$divide=4;
$modal_divide=5;
$randomizer=rand(1,5);
if ($randomizer=="1"){
    $answer=$value1+$value2;
    echo "variable 1:  ".$value1 .'<br>';
    echo "variable 2:  ".$value2 .'<br>';
    echo "rez:  " .$answer;
}
if ($randomizer=="2"){
    $answer=$value1 - $value2;
    echo "variable 1:".$value1 .'<br>';
    echo "variable 2:".$value2 .'<br>';
    echo "rez:  " .$answer;
}
if ($randomizer=="3"){
    $answer=$value1 * $value2;
    echo "variable 1:".$value1 .'<br>';
    echo "variable 2:".$value2 .'<br>';
    echo "rez:  " .$answer;
}
if ($randomizer=="4"){
    $answer=$value1 / $value2;
    echo "variable 1:".$value1 .'<br>';
    echo "variable 2:".$value2 .'<br>';
    echo "rez:  " .$answer;
}
if ($randomizer=="5"){
    $answer=$value1 % $value2;
    echo "variable 1:".$value1 .'<br>';
    echo "variable 2:".$value2 .'<br>';
    echo "rez:  " .$answer;
}
?>
//3 task
<?php
$player1="Alisa";
$player2="Siri";
$sulifa1=rand(1,3);
if ($sulifa1==1) {
    $sulifa1='rock';}
if ($sulifa1==2) {
    $sulifa1='paper';}
if ($sulifa1==3) {
    $sulifa1='scuissors';
}
$sulifa2=rand(1,3);
if ($sulifa2==1) {
    $sulifa2='rock';}
if ($sulifa2==2) {
    $sulifa2='paper';}
if ($sulifa2==3) {
    $sulifa2='scuissors';
}
if ($sulifa1=='rock' and $sulifa2=='paper'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner:  '.$player2;
}
if ($sulifa1=='rock' and $sulifa2=='scuissors'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner:  '.$player1;
}
if ($sulifa1=='scuissors' and $sulifa2=='paper'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner:  '.$player1;
}
if ($sulifa1=='paper' and $sulifa2=='rock'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner:  '.$player2;
}
if ($sulifa1=='scuissors' and $sulifa2=='rock'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner:  '.$player2;
}
if ($sulifa1=='paper' and $sulifa2=='scuissors'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner:  '.$player2;
}
if ($sulifa1=='scuissors' and $sulifa2=='scuissors'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner:  draw';
}
if ($sulifa1=='paper' and $sulifa2=='paper'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner: draw';
}
if ($sulifa1=='rock' and $sulifa2=='rock'){
    echo 'choose of first player:  '.$sulifa1 .'<br>';
    echo 'choose of second player:  '.$sulifa2 .'<br>';
    echo 'winner:  draw';
};

$x1=25;
$x2=35;
list($x1,$x2)=[$x2,$x1];
echo "x1:$x1" .'<br>';
echo "x2:$x2";


