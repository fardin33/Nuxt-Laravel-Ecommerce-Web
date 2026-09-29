<?php

use App\Models\Role;

test('role model can be instantiated', function () {
    $role = new Role();

    expect($role)->toBeInstanceOf(Role::class);
});
