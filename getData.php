<?php

$name = $_GET['name'];

$nameArr = array('jack','李四','王五');

$result = in_array($name,$nameArr);

if($result ==ture){
    echo '很遗憾，已被注册，请换一个吧';
}else{
    echo '注册成功';
}
?>

