<?php

    function test($no)
    {
        $no = $no + 50;
        return $no;    
    }
    $no = 100;
    echo "\$no มีค่าเท่ากับ $no";
        
    echo "Function \$no มีค่าเท่ากับ ".test($no);
?>