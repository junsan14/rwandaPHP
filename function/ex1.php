<?php




function taxPrice($price){
   $tax_rate = 0.18;
   echo $price*$tax_rate; 
}

function sum($person, $nationality){
    echo "$person is $nationality";
}

sum("Jun", "Japanese");