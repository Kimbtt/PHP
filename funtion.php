<?php
// // So can kiem tra 
// $number = 12;

// // goi toi ham kiem tra de kiemr tra 
// kiemTraSoChan($number);
// // Ham kiem tra so chan

// function kiemTraSoChan($num){
//     if($num % 2 == 0)
//         echo "$num la so chan";
//     else  echo "$num la so le";
// }


///////////////////////////////////////////////////////
/*
Gán giá trị mặc định cho biến truyền vào
*/

// $so1 = 12;
// $so2 = 15;

// // Chỉ truyền vào 2 đối số
// tinhTong($so1, $so2);

// // Truyền vào 3 đối số
// tinhTong($so1, $so2, 100);


// // Hàm tính tổng
// function tinhTong($a, $b, $c = null){
//     $tong = $a + $b;

//     if ($c != null) {
//         $tong += $c;
//     }
//     echo "tổng: $tong" . '<br>';
// }

//////////////////////////////////////////////////
// Biến toàn cục
$bien_toan_cuc = 12;

echo kiem_tra();
  
function kiem_tra()
{
    // Biến cục bộ
    $bien_cuc_bo = 13;
  
    // Lấy biến toàn cục
    global $bien_toan_cuc;
    
  
    // Lấy số dư biến cục bộ chia cho biến toàn cục và
    // kiểm trả về true nếu số dư = 0, ngược lại trả về false
    if ($bien_cuc_bo % $bien_toan_cuc){
        return true;
    }
    else{
        return false;
    }
}


////////////////////////////////////////////////
// Biến
// $a = 1;
  
// // Hàm tăng giá trị tham số truyền vào lên 1
//  function tang_len_1(&$a)
//  {
//     $a = $a + 1;
//     return $a; 
//  }
  
// // Xuất giá trị trả về của hàm
//  echo tang_len_1($a).'<br>';
  
// // Xuất giá trị của biến
//  echo $a;