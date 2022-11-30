<?php

'<br>';
date_default_timezone_set('UTC');
echo 'UTC'.'='. date('H:i:s j.M.Y') .'<br>';
echo '<pre>';
date_default_timezone_set('Europe/Paris');
echo 'Europe/Paris'.'='. date('H:i:s j.M.Y') .'<br>';
echo '<pre>';
date_default_timezone_set('Europe/London');
echo 'Europe/London'.'='. date('H:i:s j.M.Y') .'<br>';
echo '<pre>';
date_default_timezone_set('Asia/Aqtau');
echo 'Asia/Aqtau'.'='. date('H:i:s j.M.Y') .'<br>';

$dayofbirth="04";
$monthofbirth="08";
$year = (int)date('Y') + 1;
$nextbirthday=mktime(0,0,0,$dayofbirth,$monthofbirth,$year);
$currentTime = time();
$seconds=86400; //кол-во секунд за день
$leftdays=floor(($nextbirthday-$currentTime)/$seconds);
echo 'До дня рождения:' .$leftdays .' дней' .'<br>';

echo time();
$NY=mktime(00,00,00,01,01,2023);
echo $NY.'='. date('H:i:s j.M.Y',$NY) .'<br>';
echo date('H:i:s j.M.Y') .'<br>' ;
$a=($NY-time()); //в секундах;
$b=floor($a/60/60/24); // Делим: в 1 раз определить кол-во минут, во 2 раз определить часы,в 3 раз определить дни
echo 'До нового года осталось:  ' .$b .'      дней' .'<br>';


$dayCount = rand(10,100);
$dayText = "day";
$upddate = strtotime("+{$dayCount} {$dayText}", strtotime('today'));
$currentTime = time();
echo date('d.m.Y H:i:s', $upddate);
echo mktime(0, 0, 0, 11, 21, 2022);
echo date('H:i:s d.M.Y', mktime(0, 0, 0, 12, 21, 2022));
$ts = strtotime('next Thursday', strtotime('28 february 2023'));//28 февраля 2023
echo $ts .' = ' . date('H:i:s d.M.Y', $ts) .'<br>';


$birthday=mktime(00,00,00,07,19,1998);
echo 'день рождения:' .$birthday.'='. date('j.M.Y',$birthday) .'<br>';
echo 'Сегодня:' .date('j.M.Y') .'<br>' ;
$age=floor((time()-$birthday)/31536000); // 31536000 в одном году столько секунд
echo 'Полный возраст:  ' .$age .'лет' .'<br>';

?>



