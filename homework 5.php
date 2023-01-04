<?php
 // task 1
function outputdate(){
    echo "Сегодня:   ".date('d-m-Y');
}
echo outputdate();
echo '<pre>';

// task 3
function checkforeven($val){
    echo "Число= " .$val .'<br>';
    if ($val%2==0){
        echo "Значение четное";}
    else {
            echo "Значение не четное";}
}
echo '<pre>';
$a=rand(0,50);
echo checkforeven($a);
echo '<pre>';

////task 4
function vote($age){
    echo "Возраст гражданина= ".$age .'<br>';
    if ($age>18){
        echo "Ждем вас на выборах! Ваш участок указан в личном кабинете";
    }
    else {
        echo "К сожалению вам еще нет 18 лет! Для участия в голосовании вам осталось " .(18-$age) ." лет";
    }
}
$a=rand(1,17);
echo vote($a);
echo '<pre>';

//task 5
function determinemax($val1,$val2,$val3,$val4,$val5,$val6){
    echo "Максимальное число= " .max($val1,$val2,$val3,$val4,$val5,$val6);
    echo '<pre>';
}
echo determinemax(11,13,16,17,67,45);
echo '<pre>';
?>



