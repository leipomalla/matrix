<?php 



$string_start = array("1","0","1","<>","0","1","0","<>","1","0","1");
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
} else {
  echo "Oh yeah";
}
  

  //print_r($chunked); die;


//We'll remove quotes first
//$string_start = str_replace('"', "", $string_start);
//$string_start = str_replace("'", "", $string_start);

//divide the string to arrays using <> as divider, the result 
// is an array
/*$string_markless = explode("<>", $string_start);

for($i = 0; $i < sizeof($string_markless); $i++){
  $string_markless[$i]= trim($string_markless[$i], ",");
  $string_markless[$i]= rtrim($string_markless[$i], ",");

}
var_dump($string_markless); die;




$array = array();
foreach ($string_markless as $item){
    $array[] = explode("<>",$item);
    
}

for($i = 0; $i < $array; $i++){
  $array[$i]= trim($array[$i], ",");
    $array[$i] = rtrim($array[$i], ",");

}
var_dump($array); die;

/*echo $array_x; die;

var_dump($string_markless); die;


//divide the string to arrays using <> as divider
$string_markless = explode("<>", $string_start);



foreach($string_markless as $key => $value){
  if(in_array("<>", $value)){
    echo "Yes!";
  }
  echo $value; */
//}


/*foreach($array_nameless as $key => $value){
  echo $value . "<br>";
}

function divide($char){

}

$filtered_array = array_filter($array_nameless, "divide");





$array = array();
foreach ($array_nameless as $item){
    $array[] = explode("<>",$item);
}
var_dump($array); die;*/




//divide the string to arrays using <> as divider
/*$string_markless = explode("<>", $string_start);

//Strings inside array to arrays
for($i = 0; $i < sizeof($string_markless); $i++){
  $string_markless[$i] = rtrim($string_markless[$i], ',');
    $string_markless[$i] = trim($string_markless[$i], ',');
    
  }
  
$array_transposed = transposeData($string_markless);

function transposeData($data)
{
  $retData = array();

    foreach ($data as $row => $columns) {
      foreach ($columns as $row2 => $column2) {
          $retData[$row2][$row] = $column2;
      }
    }
  return $retData;
}
var_dump($array_transposed);



//we'll go through the arrays and strip extra commas
/*for($i = 0; $i < sizeof($string_markless); $i++){
  $string_markless[$i] = rtrim($string_markless[$i], ',');
    $string_markless[$i] = trim($string_markless[$i], ',');
    
  }
  */
//var_dump($string_markless);
//$string_markless = array_chunk($string_markless, sizeof($string_markless));
//var_dump($string_markless);

//$string_markless = explode(",", $string_markless);
//var_dump($string_markless);
//$string_exploded = explode(",", $string_start);

 // change strings in array to integers, optional
 //for($i=0; $i < sizeof($string_start); $i++){
    //echo intval($string_start[$i]);
 //}




 

  



MatrixChallenge($string_start);


function MatrixChallenge($strArr) {

  // code goes here
  
  //return $strArr;
  
}
   
// keep this function call here  
echo MatrixChallenge(fgets(fopen('php://stdin', 'r')));  

?>