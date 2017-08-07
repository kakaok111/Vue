<?php

$startdate="2012-12-10 11:40:00";
$enddate="2012-12-12 11:45:09";
$date=(strtotime($enddate)-strtotime($startdate))/86400;
$hour=(strtotime($enddate)-strtotime($startdate))/86400*24;
$minute=floor((strtotime($enddate)-strtotime($startdate))%86400/60);
$second=floor((strtotime($enddate)-strtotime($startdate))%86400%60);
echo $date."天<br>";
echo $hour."小时<br>";
echo $minute."分钟<br>";
echo $second."秒<br>";
die;

$str = '经营楼层:3、5、6层;总体量:10000平米;分割方式:157-600平米;';

$arr = explode(";", $str);

foreach ($arr as $key => $val){
   // if(!empty($val)){
             var_dump(explode(":",$val));
   // }
}
var_dump($arr);die;
$b = [];
$a[] = 1;
$a[] = 2;
array_push($b[1][],$a);
var_dump($a);



