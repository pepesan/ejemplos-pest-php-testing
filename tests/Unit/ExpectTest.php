<?php

test('verifica un valor simple', function () {
    expect(2 + 3)->toBe(5); // Verifica que la suma sea igual a 5
});


test('comparación con toBe', function () {
    $a = 5;
    $b = 5;
    expect($a)->toBe($b); // Compara identidad (valores simples)
});

test('comparación con toEqual', function () {
    $arr1 = [1, 2, 3];
    $arr2 = [1, 2, 3];
    expect($arr1)->toEqual($arr2); // Compara el valor de los arrays
});

test('verificar excepción lanzada', function () {
    expect(fn() => throw new InvalidArgumentException('Error!'))
        ->toThrow(InvalidArgumentException::class); // Verifica que se lanza la excepción
});

test('verificar cadenas', function () {
    $string = 'Hello, Pest!';

    expect($string)->toContain('Pest'); // Verifica que contiene 'Pest'
    expect($string)->toStartWith('Hello'); // Verifica que empieza con 'Hello'
    expect($string)->toEndWith('Pest!'); // Verifica que termina con 'Pest!'
});

test('negar expectativas', function () {
    expect(2 + 2)->not->toBe(5); // Verifica que 2 + 2 NO es igual a 5
    expect('Hello, World!')->not->toContain('Goodbye'); // Verifica que la cadena NO contiene 'Goodbye'
});

test('comprobaciones complejas', function () {
    expect([1, 2, 3])->each(fn ($item) => expect($item)->toBeLessThan(5)); // Verifica que cada elemento es menor que 5
});

test('verificar tipo de variable', function () {
    expect(123)->toBeInt(); // Verifica que es un entero
    expect(12.34)->toBeFloat(); // Verifica que es un float
    expect('Pest')->toBeString(); // Verifica que es un string
    expect(true)->toBeBool(); // Verifica que es booleano
    expect([])->toBeArray(); // Verifica que es un array
});


test('verificar valores nulos o vacíos', function () {
    expect(null)->toBeNull(); // Verifica que es null
    expect([])->toBeEmpty(); // Verifica que el array está vacío
    expect('')->toBeEmpty(); // Verifica que el string está vacío
});

test('verificar arrays', function () {
    $array = ['apple', 'banana', 'cherry'];

    expect($array)->toHaveCount(3); // Verifica la longitud del array
    expect($array)->toContain('banana'); // Verifica que contiene 'banana'
    expect($array)->not->toContain('grape'); // Verifica que NO contiene 'grape'
});



