<?php
// c.php?n1=xxx&n2=xxxx
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

$chengji = $n1*$n2;

$arr = array('n1'=>$chengji,'n2'=>34);//{n1:xxx,n2:xxx}

echo json_encode($arr);

?>