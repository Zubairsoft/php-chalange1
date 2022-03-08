<?php

$origian_array=array("mohammed","ali","omar","salim","ali","salim","omar");
echo "origin array :<br>";
print_r($origian_array) ;
$update=array_unique($origian_array);
echo "<br> updating array :<br>";
print_r ($update);
echo "<br>";
$arr=array("name"=>"mohammed","age"=>55);
echo json_encode($arr);
echo "today is " .date("F d ,Y");
?>