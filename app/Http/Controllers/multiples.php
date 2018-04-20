<html>
   <body>
      
      <?php
         $a = 3;
         $b = 5;
         $sum = 0;
         
         for( $i = 0; $i<10; $i++ ) {
           if((($i%$a)==0)||(($i%$b)==0)){
               $sum = $sum + $i;
           }
           
         }
         
         
         echo ("At the end of the loop $sum" );
      ?>
   
   </body>
</html>

