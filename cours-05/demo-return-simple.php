<?php

function test() {
    if (1 == 2) {
        return 'AB';
    }
    echo 'DDD';
    return 123;
    echo 'FFF';
    return 456;
}

echo test();

// $temporaire = $temporaire + 10;

// echo $temporaire;

?>