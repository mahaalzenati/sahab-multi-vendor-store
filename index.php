<?php
class students{
  public $first_name="maha";
  public $seconed_name="alzenati";

  function name(){
    return  $this->first_name ." ". $this->seconed_name;
  }
}
$student = new students();
echo $student->name();
echo "<br>";

class fun{
  
  public $result;

  function sum($number_1,$number_2){
    $result = $number_1 + $number_2;
    echo $result;
  }
}

$fun1 =new fun();
$fun1->sum(10,20);

echo "<br>";
$s= date("H");
echo $s;
echo "<br>";
if($s<"10"){
  echo "good morning";
}
elseif($s<"20"){
  echo "good day";
}
else{
  echo "good night";
}
echo "<br>";
switch($s){
  case 10:
    echo "morning";
    break;
  case 20 :
    echo "day" ;
    break;
  default:
  echo "none" ;
  

}
echo "<br>";
$t=2;
while($t<=4){
  echo $t;
  echo "<br>";
  $t++;
}
echo "<br>";
do{
  echo $t;
  $t++;
}while($t<=4);
echo "<br>";
for($i=0 ;$i<9;$i++){
  echo "maha";
  echo "<br>";
}
echo "<br>";
$colors = array(
  "r"=> "red",
  "b"=> "blue",
  "bl"=> "black");
foreach($colors as $x=> $color){
  //echo $x ." "."="." ".$color;
  echo "$x = $color";
  echo "<br>";
  
}

?>