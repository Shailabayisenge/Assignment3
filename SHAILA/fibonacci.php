<p><b>fibonacci sequence</b></p>
<?php
    $yu = 0;
    $sh = 1;
    $m = 10;
    echo $yu;
    echo '<br/>';
    echo $sh,"<br>";
    for($i = 1; $i <= $m; $i++) {
        $er = $yu + $sh;
        $yu = $sh;
        $sh = $er;
        echo $er ."<br />"; 
    }
?>