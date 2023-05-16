<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        UserName: <input type="text" name="userName" value=""> <br>
        PassWord: <input type="password" name="password" value=""> <br>
        <input type="submit" value="Submit" name="formClick"><br>
        <?php
            // Nếu người dùng click vào nút submit 
            // Vì button có tên là formClick nên đó cũng là tên của key nawmg trong biến $_POST
            if (isset($_POST["formClick"])) {
                // var_dump($_POST);
                echo "Tên đăng nhập là: " . $_POST['userName'] . "<br>";
                echo "Mật khẩu là: " . $_POST['password'] . "<br>";
            }

        ?>
    </form>
</body>
</html>