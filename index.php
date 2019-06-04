<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài tập hiển thị các số nguyên tố nhỏ hơn 100</title>
</head>
<body>
<?php
    function findPrimeNumbers($number) {
        if ($number < 2){
            return false;
        }
        for ($i = 2; $i < sqrt($number); $i++){
            if ($number % $i === 0){
                return false;
            }
        }
        return true;
    }
    for ($i = 0; $i < 100; $i++){
        if (findPrimeNumbers($i)){
            echo ("Các số nguyên tố là: $i". "<br>");
        }
    }
?>
</body>
</html>