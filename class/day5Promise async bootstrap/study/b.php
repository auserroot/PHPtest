<?php
    // b.php?n1=xx&n2=xxx
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    $sum = $n1+$n2;

    $arr = array('n1'=>$sum,'n2'=>45);

    echo json_encode($arr);// {n1:xxx,n2:xxx}
?>