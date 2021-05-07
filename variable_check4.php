<?php 
    define('vat', '0.07');
    $price = 500;
    $tax = $price * vat;
    echo "ราคาสินค้า $price บาท มีค่าภาษีมูลค่าเพิ่มเท่ากับ $tax บาท";
?>