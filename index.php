<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoc php</title>
</head>
<body>
    <h1>My first PHP page</h1>
    <?php
        // $txt = "Hello";
        // // echo " hello $txt";
        // // echo "Hello" .$txt;

        // // var_dump($txt);
        // $arr = [1,2,3,4];
        // print_r($arr);

        // $bienSo1 = "kim";
        // $bienSo2 = "Bui";

        // // $bienTong = $bienSo1 . " " . $bienSo2;
        // $bienTong = "$bienSo2     $bienSo1";

        // echo $bienTong;

    ?>

    <?php
    // $bien1 = "mot";
    // $bien2 = "hai";
    // $bien3 = "ba";
    // $bien4 = "bon";

    // echo "
    // <ul>
    //     <li>$bien1</li>
    //     <li>$bien2</li>
    //     <li>$bien3</li>
    //     <li>$bien4</li>
    // </ul>"

    ?>

    <?php
    //// HANG SO
    // define("_CONST1", 10);
    // const _CONST2 = 15;

    // echo _CONST1 . _CONST2;
    ?>

    <?php
    /**Ep kieu */

    // $bien1 = '8';
    // $bien2 = (int)$bien1;

    // echo is_int($bien1); // trả về null == false
    // echo is_int($bien2); // trả về 1 == true
    // var_dump($bien2);

    // $bien3 = "true";
    // $bien4 = (bool)$bien3;
    // $bien5 = true;

    // echo is_bool($bien4);
    // echo is_bool($bien5);
    // var_dump($bien4);

    // $bien6 = 10;
    // $bien6 = (string)$bien6;

    // echo is_string($bien6);
    // var_dump($bien6);

    // $bien7 = '1, 2, 3';

    // // var_dump($bien7);

    // $bien7 = (array)$bien7;
    // // var_dump($bien7);
    // echo is_array($bien7);

    // $nam = 2014;

    // if($nam % 4 == 0 || $nam % 400 == 0 && $nam % 100 != 0){
    //     echo "nam $nam la nam nhuan";
    //     // return;
    // } 
    // echo "nam $nam khong phai la nam nhuan";
    ?>

   


    <!-- <?php
    $sinhVien = array(
        'SV01' => 'Bui Trong Kim',
        'SV02' => 'Tran Trung Nghia',
        'SV03' => 'Bui Thanh Tam',
        'SV04' => 'Vu Thi Ruyen',
        'SV05' => 'Bui Kim Trong',
    );
    foreach ($sinhVien as $maSV => $tenSV) {
        echo "$maSV => $tenSV <br>";
    }
    ?> -->

    <?php
        for ($i = 1; $i <= 100; $i++)
        {
            if ($i == 20)
            {
                break;
            }
            echo $i . ' ';
        }
    ?>
</body>
</html>