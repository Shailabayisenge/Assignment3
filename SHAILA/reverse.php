<?php
$t="SHAILA";

echo "before reverse: <b>",$t,"</b><br><br>";
echo "after reverse: <b>";
for ($i=strlen($t)-1; $i >=0 ; $i--) { 
    echo $t[$i];
}
echo "</b>";

?>