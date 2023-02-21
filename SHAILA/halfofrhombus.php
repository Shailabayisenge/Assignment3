
<P>a half of rhombus</P>
<?php
    //rhombus

    $mmmm=10;

    for ($i=1; $i <=$mmmm ; $i++) { 
        echo "<br>";
        for ($j=1; $j <=$mmmm ; $j++) { 
            if ($j<=($mmmm-$i)) {
                echo "&nbsp&nbsp";
            }
            else {
                if ($i==10) {
                    
                        for ($i=1; $i <=$mmmm ; $i++) { 
                            
                            for ($j=$mmmm; $j >=1; $j--) { 
                            if ($j<=($mmmm-$i)) {
                                echo "*";   
                            }
                        else {
                            echo "&nbsp&nbsp";
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
    