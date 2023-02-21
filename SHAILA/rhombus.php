
    <P>rhombus</P>
<?php
    //rhombus

    $sh=10;

    for ($i=1; $i <=$sh ; $i++) { 
        echo "<br>";
        for ($j=1; $j <=$sh ; $j++) { 
            if ($j<=($sh-$i)) {
                echo "&nbsp";
            }
            else {
                if ($i==10) {
                    
                        for ($i=1; $i <=$sh ; $i++) { 
                            
                            for ($j=$sh; $j >=1; $j--) { 
                            if ($j<=($sh-$i)) {
                                echo "*";   
                            }
                        else {
                            echo "&nbsp";
                        }
                    }
                    echo "<br>";
                }
                
                   break; 
                }
                else{
                    echo "*";
                }
                    

                
                
            }
        }
    }

?>
    