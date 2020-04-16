<?php
include ("/var/db/dbconfig.php");

              for($i = 1; $i <= $ct; i++)
              {
                if($pcantitate[$i] > 0)
                {

                  $sql = "UPDATE produse_cart SET cantitate = '$pcantitate[$i]' WHERE id = '$pidvector[$ct]'";
                  mysqli_query($db, $sql);
               }

              // else

               }       
                ?>