<?php
    require_once "vendor/autoload.php";
function _pr($a){
    echo '<pre>';
    print_r($a);
    echo '</pre>';
}
// 1. array_change_key_case(array, case[CASE_LOWER | CASE_UPPER])
// changes all keys in an array to lowercase or uppercase
echo '<h3>1. array_change_key_case(array: Req, case[CASE_LOWER | CASE_UPPER]: Opt, Def - CASE_LOWER):</h3>';
$arr = ["bannana"=>5,"apple"=>6,"mango"=>10, ["bmw" => 5,"mercedes" => 2,]];
$carr = array_change_key_case($arr, CASE_UPPER);
_pr($carr);

echo '<h3>2. array_chunk(array: Req, size: Req, preserve_key[true|false]: Opt):</h3>';
$cars=["Volvo","BMW","Toyota","Honda","Mercedes","Opel"];
_pr(array_chunk($cars,2));

$arr = ["bannana"=>5,"apple"=>6,"mango"=>10,"guava"=>20,["bmw" => 5,"mercedes" => 2,]];
$carr = array_chunk($arr, 2, true);
_pr($carr);

echo '<h3>3. array_column(array: Req, column_key: Req, index_key: Opt): Returns the values from a single column in the input array</h3>';
$users = [
    [
        "id" => 5464,
        "firstName" => "Jane",
        "lastName" => "Doe",
    ],
    [
        "id" => 5465,
        "firstName" => "Oli",
        "lastName" => "Hale",
    ],
    [
        "id" => 5466,
        "firstName" => "Rowan",
        "lastName" => "Atkinson",
    ],
];
$result = array_column($users, "lastName", "id");
_pr($result);

echo '<h3>4. array_combine(array1: keys: Req, array2: values: Req): Both arrays must have equal number of elements </h3>';
$name = ["Oliver Hale", "Rowan Atkinson", "Jane Doe", "A", "A"];
$age = [30, 45, 22, "A", "A"];
$result = array_combine($age, $name);
_pr($result);










