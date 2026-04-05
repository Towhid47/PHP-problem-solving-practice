<?php

// -----------------------------------------------
// Create a function where if I input a subject mark, it will return the GPA and Grade.
// -----------------------------------------------

function calculateGPA($mark){
    if($mark <= 100 && $mark>=80 ){
        echo "A+";
    }
    elseif($mark < 80 && $mark>=70 ){
        echo "A" ; 
    }
    elseif($mark < 70 && $mark>=60 ){
        echo "B"; 
    }
    elseif($mark < 60 && $mark>=50){
        echo "C";
    }
    elseif($mark < 50 && $mark>=36){     // minimum passed mark = 36
        echo "D"; 
    }
    else{
        echo "F"; 
    }
}

calculateGPA(35);