<?php

    //hàm tính tổng tiền trong đơn hàng
    function tinhtongtien($vedat){
        $tongtien = 0;
        foreach ($vedat as $key => $value) {
          $tongtien += $value['soluong'] * $value['giave'];
        }
        return $tongtien;
    }

    

?>