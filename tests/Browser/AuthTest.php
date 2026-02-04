<?php

use App\Models\User;

test('registers a user', function () {
    $password = fake()->password(16, 16);

    visit('/register')
        ->fill('name', 'Jane Doe')
        ->fill('email', 'janedoe@gmail.com')
        ->fill('email_confirmation', 'janedoe@gmail.com')
        ->fill('password', $password)
        ->fill('password_confirmation', $password)
        ->press('@register-button')
        ->assertPathIs('/ideas');

    expect(User::where('email', 'janedoe@gmail.com')->exists())->toBe(true);
    $this->assertAuthenticated();
});
