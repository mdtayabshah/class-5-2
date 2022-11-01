<?php
echo"Htmlentities</br>";

$str="a quote is <b>bold</b>";

echo html_entity_decode($str);
echo"</br>"; 
echo htmlentities($str);
echo"</br>";
$str="my name is rifat";
echo str_repeat($str,2);
echo"</br>";
$name="rifat,nirob";
if(empty($name)=="hasan"){
    echo"hey your here";

}else{
    echo"you are not there</br>";
}
$b=5;
if(isset($b)){
    echo"variable'b'  is set</br>";

}

$name=["my","name","is","rifat"];
$a= implode(' ',$name);
echo$a,"</br>";

$b="my name is rifat";
$new_array=explode(' ',$b."</br>");
print_r($new_array,"</br>");

$food =[
    "a="=>'pizza',
    "b"=>'noodels',
    "c"=>'machvath</br>',

];
echo"<pre>";
print_r($food);
echo"</pre>";

if(end($food)=='misty'){
    echo"okay";
}else{
    echo"i dont like</br>";
}
$t_shirt =[
    "a"=>10,
    "b"=>9,
    "c"=>2,
];
echo count($t_shirt);
$array1=[
    'a'=>'bike','car','cng',
];

$array2=[
    'b'=>'ven','rikshaw','cng'
];
echo'<pre>';
print_r(array_diff($array1,$array2));
echo '</pre>';
$a=[
    '1','2','3',
];
array_push($name,'4');
echo'<pre>';
print_r($a);
echo'</pre>';
echo'</br>';

$hi=[
    'my','name','is',
];
array_pop($hi);
echo'<pre>';
print_r($hi);
echo'</pre>';
echo'</br>';
echo"</br>";
$number=[
    '123','456','789',
];
array_shift($number);
echo'<pre>';
print_r($number);
echo'</pre>';
echo'</br>';
$number=[
    '123','456','789',
];
array_unshift($number,'098',);
echo'<pre>';
print_r($number);
echo'</pre>';
echo'</br>';

$name="hello world";
$array=explode(" ",$name);

echo'<pre>';
print_r(array_reverse($array)[0]);
echo'</pre>';
echo'</br>';
