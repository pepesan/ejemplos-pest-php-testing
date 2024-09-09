<?php
require './src/User.php';

beforeAll(function () {
    echo "beforeAll";
});
// Utiliza beforeEach para configurar el fixture
beforeEach(function () {
    echo "beforeEach";
    $this->user = new User('John Doe');
});

afterEach(function () {
    echo "afterEach";
});

afterAll(function () {
    echo "afterAll";
});

test('el nombre del usuario es John Doe', function () {
    expect($this->user->getName())->toBe('John Doe');
});

test('puede cambiar el nombre del usuario', function () {
    $this->user->name = 'Jane Doe';
    expect($this->user->getName())->toBe('Jane Doe');
});

test('verificar objetos', function () {
    $user = new User('John Doe');

    expect($user)->toBeInstanceOf(User::class)
        ->and($user)->toHaveProperty('name')
        ->and($user->name)->toBe('John Doe'); // Verifica que es una instancia de User
    // Verifica que tiene la propiedad 'name'
    // Verifica el valor de la propiedad
});


