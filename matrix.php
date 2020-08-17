<?php 

function MatrixChallenge($strArr) {

 //filter <>, new array consists only of numbers
$filtered = array_filter($strArr, function($var) {
  return (is_numeric($var)); 
});

//Let's count how many <> there was. +1 is because we are chunking next
//and we need one more chunk than we had <>
$diff_count = count($strArr) - count($filtered) + 1;

//array of numbers is divided to equal chunks
$chunked = array_chunk($filtered, $diff_count);

//Every sub-array is same size, so we can compare the size of array
// (rows) to first sub-arrays size (columns)
if(sizeof($chunked) != sizeof($chunked[0])){
  echo "not possible";
  die;
} 
 
// Echo symmetric if array(=$chunked)is  
// symmetric, else not symmetric

    //transpose is done with this block
    $tr = array(array()); 
    for ($i = 0; $i < sizeof($chunked); $i++) {
        for ($j = 0; $j < sizeof($chunked); $j++) {
            $tr[$i][$j] = $chunked[$j][$i]; 
            
        }
    }
    // Comparing original array with transposed 
    
    for ($i = 0; $i < sizeof($chunked); $i++) {
        for ($j = 0; $j < sizeof($chunked); $j++){ 
          
            if ($chunked[$i][$j] != $tr[$i][$j]){ 
              echo 'not symmetric'; 
              die; 
            }
        }  
    }
    echo 'symmetric';  

} 
                

   
// keep this function call here  
 echo MatrixChallenge(fgets(fopen('php://stdin', 'r')));  

?>