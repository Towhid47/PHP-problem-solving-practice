<?php

//--------------------------------------------------------------------------------------
//   create a function where if I input six subjects’ marks, 
//   it will return each subject’s GPA and Grade along with the final GPA and Grade.
//------------------------------------------------------------------------------------- 

function result($marks){

     //---------Convert Marks into Grade Points and Letter Grades
     foreach($marks as $key => $value){
     
         $letter_grade = ""; 
         $grade_point = 0.00; 

         if($value <= 100 && $value >= 80){
             $letter_grade = "A+"; 
             $grade_point = 5.00 ;
         }
         elseif($value < 80 && $value >=70){
             $letter_grade = "A"; 
             $grade_point = 4.00 ;
         }
         elseif($value < 70 && $value >=60){
             $letter_grade = "B"; 
             $grade_point = 3.00 ;
         }
         elseif($value <60 && $value >=50){
            $letter_grade = "C";
            $grade_point = 2.00 ; 
         }
         elseif($value <50 && $value >= 36){     // -------- Minimum Pass Mark 36
            $letter_grade = "D";
            $grade_point = 1.00 ; 
         }  
         else{
            $letter_grade = "F"; 
            $grade_point = 0.00 ;
         }

         echo "
                <table>
                      <td>{$key}.====</td>
                      <td>{$grade_point}.====</td>
                      <td>{$letter_grade}</td>
                </table>
         " ;

         $marks[$key] = [$grade_point , $letter_grade];
     }

     

     //----------Calculate Grade Point Average (GPA) 
     function final_result($marks){

         $total_grade_point = 0.00 ;
         $total_subjects = count($marks);
         $grade_point_average = 0 ; 
         
         foreach($marks as $key => $value){
             $total_grade_point += $marks[$key][0];
         }  

         $grade_point_average = $total_grade_point / $total_subjects ; 
         echo  "GPA : " . number_format($grade_point_average, 2). "<br>"; 

     }


     //---------Passed or Failed Status   
     function status($marks){
         $is_failed = false ;

         foreach($marks as $key => $value){
             
             if($value[1] === "F"){
                 $is_failed = true ; 
                 break; 
             }
         }

         if($is_failed){
            echo "result: "."Failed" ; 
         }
         else{
            echo "result: "."Passed" ;
         }
     }

     
     final_result($marks);
     status($marks); 
     

}


$marks = [
    "mathematics" => 99,
    "physics" => 78, 
    "chemistry" => 56,
    "biology" => 59,
    "geography" => 44,
    "ICT" => 50 
]; 


result($marks); 