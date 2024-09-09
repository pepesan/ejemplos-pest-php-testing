<?php
require_once './src/functions.php';

test('suma de dos números', function () {
    $resultado = suma(2, 3);
    expect($resultado)->toBe(5);
});

