<?php

dataset('números', [
    [1, 2, 3],
    [2, 2, 4],
    [3, 3, 6],
]);

test('suma números correctamente', function ($a, $b, $resultadoEsperado) {
    expect($a + $b)->toBe($resultadoEsperado);
})->with('números');
