<?php
for ($i = 0; $i <= 100; $i++) {
    echo '<span style="font-size: 6;"> ' . $i;
    echo str_repeat("&nbsp;", 4); 
}
echo "</b><br>";
for ($i = 1; $i <= 100; $i++) {
    for ($j = 1; $j <= 100; $j++) {
        echo $j*$i;
        echo str_repeat("&nbsp;", 4); 
    }
    echo "</b><br>";
}
?>