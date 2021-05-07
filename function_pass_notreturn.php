<?php
    function test($no)
    {
        $sign = "";
        for($i=1;$i<=$no;$i++)
        {
            $sign = $sign."*";
        }
        echo "$sign <br>";
    }
    test(30);
    echo "Hello <br>";
    echo "Testttttt <br>";
    test(30);
?>