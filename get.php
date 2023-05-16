<?php
echo "Dữ liệu chúng tôi nhận được là <br>";

foreach ($_GET as $key => $value) {
    echo "<strong> $key => $value <strong><br>";
}