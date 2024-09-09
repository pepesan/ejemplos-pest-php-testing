<?php

function userFactory($name = 'John Doe') {
    return new User($name);
}

test('crea un usuario usando factory', function () {
    $user = userFactory('Jane Doe');
    expect($user->getName())->toBe('Jane Doe');
});

