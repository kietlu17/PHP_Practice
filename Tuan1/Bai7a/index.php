<?php
    $n = 10;
    $arr = [];
    for ($i=0; $i< $n; $i++){
        $arr[] = rand(1, 100);
    }

    print_r($arr);

    $chan = 0;
    for ($i=0; $i< $n; $i++){
        if ($arr[$i]%2 == 0)
        $chan += 1;
    }
    echo '<br>';
    echo 'Đếm tổng số chẵn có trong mảng: ', $chan;

    $tong_le = 0;
    for ($i=0; $i< $n; $i++){
        if ($arr[$i]%2 != 0)
        $tong_le += $arr[$i];
    }
    echo '<br>';
    echo 'Tính tổng của các số lẻ trong mảng: ', $tong_le;

    echo '<br>';
    echo 'Giá trị lớn nhất trong mảng: ', max($arr);

    
    echo '<br>';
    echo 'Giá trị nhỏ nhất trong mảng: ', min($arr);

    echo '<br>';
    print_r(array_reverse($arr));

?>