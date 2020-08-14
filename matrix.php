$string_start = array("1","0","1","<>","0","1","0","<>","1","0","-1");
//var_dump($string_start); 


//callback function for array_filter, removes <>
function numeric($var){
  
    return (is_numeric($var));

  
}
 //new array without <> 
$filtered = array_filter ($string_start, "numeric");

//print_r($filtered); die;
//Let's count how many <> there was.+1 is because we are chunking next
$diff_count = count($string_start) - count($filtered) + 1;

$chunked = array_chunk($filtered, $diff_count);

//Every sub-array is same size, so we can compare the size of array
// (rows) to first sub-arrays size (columns)
if(sizeof($chunked) != sizeof($chunked[0])){
  echo "not possible";
} 
// Returns true if mat[N][N] is  
// symmetric, else false 
function isSymmetric($mat, $rows) 
{ 
    $tr = array(array()); 
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $rows; $j++) {
            $tr[$i][$j] = $mat[$j][$i]; 
        }
    }
    // Fills transpose of  
    // mat[N][N] in tr[N][N]  
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $rows; $j++){ 
            if ($mat[$i][$j] != $tr[$i][$j]){ 
                return false; 
            }
    return true; 
        }
}
} 
  
    // Driver code 
    $mat= $chunked;
                  
    if (isSymmetric($mat, sizeof($chunked))) {
        echo "symmetric"; 
    } else {
        echo "not symmetric"; 
    }
  
  

  //print_r($chunked); die;


//We'll remove quotes first
//$string_start = str_replace('"', "", $string_start);
//$string_start = str_replace("'", "", $string_start);
