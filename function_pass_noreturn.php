<?php

    function test($no)
    {
        $a = "";
        for($i=1;$i<=$no;$i++)
        {
            $a = $a."-";
        }
        echo "$a <br>";
    }
    test(20);
    echo "Bas <br>";
    test(20);
?>