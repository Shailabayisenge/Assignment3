
<P>equilateral triangle</P>
<?php
    //rhombus

    $jh=10;

    for ($i=1; $i <=$jh ; $i++) { 

        ?>
        <div style="margin-top:-10px">
        <?php

        for ($j=1; $j <=$jh ; $j++) { 
            if ($j<=($jh-$i)) {
                echo "&nbsp";
            }
            else {
            
                    echo "*";
              
                    

                
                
            }
        }
        ?>
        </div>
        <?php
    }

?>
    