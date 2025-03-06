<?php


/**
 * comment line one
 * comment line two
 */

//echo "hello world"; //this print message


/**
 * 
 * to print something to user
 * 
 * @ echo "string"
 * @ print("string")
 * @ print_r()
 * 
 * to know the varible type
 * @ var_dump(mixed)
 * 
 * condtions
 * 
 * condtion opertors
 * >
 * <
 * >=
 * <=
 * ==
 * !=
 * 
 * !==
 * ===
 * 
 * @ and &&
 * 
 * truth table
 * 
 * c1   c2  R
 * T    T   T
 * F    T   F
 * T    F   F
 * F    F   F
 * 
 * @ or ||
 * truth table
 * c1   c2  R
 * T    T   T
 * F    T   T
 * T    F   T
 * F    F   F
 * 
 * @ Not !
 * truth table
 * c1   R
 * T    F
 * F    T
 * 
 * syntax
 * 
 * @ if
 * if(condtion){
 * code
 * }
 * 
 * @ if ... else
 * 
 * if(condtion){
 * code
 * } else {
 * //code  excution in false condtion
 * }
 * 
 * @    if ... elseif ... elseif ... else
 * 
 * if(condtion){
 * code
 * } else if(condtion){
 * code
 * }else if(condtion){
 * code
 * } else {
 * //code  excution in false condtion
 * }
 * 
 * switch($clusis_degree){
 *     case '30':
 *         echo 'cold';
 *         break;
 *     case 40:
 *         echo 'hot';
 *         break;
 *     default:
 *         echo 'default';
 * }
 * 
 * 
 * loop
 * 
 * for
 * 
 * for($i=0;$i>5;$i++){
 * //code
 * }
 * 
 * while
 * 
 * while($i < 5){
 * //code
 * }
 * 
 * do...while
 * 
 * do{
 * 
 * }while($i>0);
 * 
 * 
 * foreach ($numbers as $hbozo) {
 *   # code...
 *  echo $hbozo;
 *   }
 * Array
 * 
 * syntax
 * 
 * @ according []
 * 
 * $number = [1,2,3,4]
 * 
 * @ according array function
 * 
 * $number = array(1,2,3,4)
 * 
 * @properties
 * 
 * array has index
 * first index == 0
 * last index == n-1 where n is number of items
 * 
 * @ array Functions
 * 
 * count($array) => عدد العناصر فى الاراي
 * array_push($numbers,10);
 * array_unshift($numbers,10);
 * array_shift($numbers);
 * array_pop($numbers);
 */

$numbers = [1, 2, 3, 4];

// echo count($numbers); //print number of items

// echo $numbers[0]; //print the value of index 0

// $numbers[0]=5; //change the value of index 0

// echo $numbers[0]; //print the value of index 0

// array_push($numbers,10);
// array_unshift($numbers,12);
// print_r($numbers);

// echo "new <br>";
// array_shift($numbers);
// array_pop($numbers);

// print_r($numbers);

// array loop

foreach ($numbers as $hbozo) {
    # code...
    echo $hbozo;
}
