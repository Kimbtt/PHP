<?php
//Hàm này sẽ thêm dấu gạch chéo (\) đằng trước những ký tự trong chuỗi $str mà ta liệt kê ở $char_list.
// a..z
// echo ($str = addcslashes('freetuts.net FREETUTS.NET', 'a..zA..Z'));

// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo stripcslashes($str);


/////////////////////////

// $str = 'freetuts.net is a website free for you';

// // Mỗi khoảng trắng sẽ là một phần tử trong mảng<br />

// $result = explode(' ', $str);

// foreach ($result as $key => $value) {
//     echo"$key => $value <br>";
// }

// echo implode(" ", $result);

//////////////////////////////////
// echo strip_tags('<b>freetuts.net</b>', 'a');


////////////////////////////////////
// $array_keys = array('a', 'b',3);
// $array_values = array('one', 'two', 'three');
// print_r(array_combine($array_keys, $array_values));
// /* kết quả:
// Array(
// [a] => one
// [b] => two
// 1 => three;
// )*/;

///////////////////////////////////////
$fruits = array("Apple", "Banana", "O");

print_r($fruits);
echo'<br>';
echo'<br>';

var_dump(($fruits));