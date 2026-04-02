<?php

// ------------------------------------------------------------------------------------------------------------------------------------------
//   Problem 1 :  Make a function that takes initial value and end value and
//                user can choose to generate loop from high to low numbers or low to high numbers.
// ------------------------------------------------------------------------------------------------------------------------------------------


//Here , direction variable allow users to choose which loop he wants to generate.. 

function generate_Loop( int $startValue, int $endValue,  string  $direction= "low-to-high" ): void{

      switch($direction){

         case "low-to-high":
                
               echo "Low to High numbers : <br>" ; 
               for ($startValue ; $startValue <= $endValue ; $startValue ++  ){
                     
                    echo  "$startValue <br>" ; 
               }
            break; 

         case "high-to-low" : 
              
                echo "High to Low numbers : <br>" ; 
                for($startValue ; $startValue >= $endValue ; $startValue-- ){
      
                    echo "$startValue <br>" ; 
                }
            break;
            
         default :
             
             echo "Direction input invalid. type low-to-high  Or  high-to-low direction."; 
             break; 
      }
}


generate_Loop(20 , 5 , "high-to-low"); 






?>