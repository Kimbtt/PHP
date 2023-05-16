<?php

function Fibo($n){
    if ($n <= 2) {
        return  1;
    } else {
        return (Fibo($n - 2) + Fibo($n - 1));
    }
    
}

echo Fibo(21);