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
 * array_search(5,$numbers)
 * array_sum($numbers)
 * array_slice($numbers,0,2)
 * array_splice($numbers,1,1,[10,11])
 * array_merge($africa,$aisa,$europ)
 * array_reverse($africa)
 * sort($numbers)
 * 
 * Functions
 * 
 * @param no params
 * @return void
 * 
 * function sayHello(){
 *   echo "Hello";
 * }
 * 
 * @param $username string param
 * 
 * @return viod
 * 
 * function sayHello($username){
 * echo "Hello $username";
 * echo 'Hello '.$username; //concat using operator dot 'string'.'another string'
 *}
 * 
 * @param $number1 as int|float
 * @param $number2 as int|float
 * 
 * @return int|float
 * 
 * function sum($number1,$number2)
 *{
 *   return $number1+$number2;
 *}
 * Assotcivie
 * $student_data = [
 *       'id' => 1,
 *       'student_name' => 'Mohamed',
 *       'Student_age' => 35   
 *];
 */
