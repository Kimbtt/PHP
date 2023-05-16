<?php


// $mang = array (1, 5, 9, 2, 4, 9);

// // Gán lại giá trị mới cho mangr
// $mang = sapXepMang($mang);

// // In mảng
// foreach ($mang as $key => $value) {
//     echo "$key => $value <br>";
// }

// // Mang sap xep giam dan
// function sapXepMang($mang){
//     $soPhanTu = count($mang);
    
//     // Sap xep mang
//     for ($i=0; $i < $soPhanTu ; $i++) { 
//         for ($j=$i +1; $j < $soPhanTu; $j++) { 
//             if ($mang[$i] < $mang[$j]) {
//                 $mang[$j] = $mang[$i] + $mang[$j];
//                 $mang[$i] = $mang[$j] - $mang[$i];
//                 $mang[$j] = $mang[$j] - $mang[$i];
//             }
//         }
//     }

//     return $mang;
// }



///////////////////////////////////////////////////////////////////
// function kiem_tra($mang, $soCanTim) {
//     foreach ($mang as $value) {
//         if ($value == $soCanTim) {
//             return true; // Trả về true nếu tìm thấy giá trị trong mảng
//         }
//     }
//     return false; // Trả về false nếu không tìm thấy giá trị trong mảng
// }

// // Chương trình chính
// // Cho mảng
// $mang = array(321, 312, 3, 4, 5, 45, 56, 5, 7, 6, 787, 8, 7, 2);

// $canTim = 6;
// if (kiem_tra($mang, $canTim)) {
//     echo "Có trong mảng";
// } else {
//     echo "Không có trong mảng";
// }


/////////////////////////////////////////////////////////////////

// function SelectionSortAscending($mang)
// {
//     // Đếm tổng số phần tử của mảng
//     $sophantu = count($mang);
  
//     // Lặp để sắp xếp
//     for ($i = 0; $i < $sophantu - 1; $i++)
//     {
//         // Tìm vị trí phần tử nhỏ nhất
//         $min = $i;
//         for ($j = $i + 1; $j < $sophantu; $j++){
//             if ($mang[$j] < $mang[$min]){
//                 $min = $j;
//             }
//         }
  
//         // Sau khi có vị trí nhỏ nhất thì hoán vị
//         // với vị trí thứ $i
//         $temp = $mang[$i];
//         $mang[$i] = $mang[$min];
//         $mang[$min] = $temp;
//     }
  
//     // Trả về mảng đã sắp xếp
//     return $mang;
// }

// $mang = array(321, 312, 3, 4, 5, 45, 56, 5, 7, 6, 787, 8, 7, 2);

// $mang = SelectionSortAscending($mang);

// foreach ($mang as $key => $value) {
//     echo "$key => $value" . '<br>';
// }


///////////////////////////////////////////////////////////////
//Sắp xếp giảm dần:
function InsertionSort($mang)  {
    // Tổng số phần tử
    $sophantu = count($mang);
  
    // Lặp qua từng phần tử của mảng để sắp xếp
    for ($i = 0; $i < $sophantu; $i++)
    {
        // Lặp từ phần tử thứ $i, ví dụ $i = 6
        // thì sẽ lặp từ phần tử số 6 trở về 0 để kiểm tra
        $loop = $i;
  
        // Lưu lại giá trị của $mang[$i] để khỏi bị mất
        $current = $mang[$i];
  
        // điều kiện dừng là $loop <= 0 (tức là hết mảng) hoặc
        // phần tử thứ $loop - 1 lớn hơn phần tử thứ $i (vì đã tìm đc đúng vị trí)
        // nếu một trong 2 điều kiện đó đúng thì sẽ dừng vòng lặp
        while($loop > 0 && ($mang[$loop - 1] < $current))
        {
            // Di dời các phần tử lên 1 bậc
            $mang[$loop] = $mang[$loop - 1];
            $loop -= 1;
        }
  
        // Gán giá trị $current vào vị trí tìm được
        $mang[$loop] = $current;
    }
    return $mang;
}

$mang = array(321, 312, 3, 4, 5, 45, 56, 5, 7, 6, 787, 8, 7, 2);

$mang = InsertionSort($mang);

foreach ($mang as $key => $value) {
    echo "$key => $value" . '<br>';
}
