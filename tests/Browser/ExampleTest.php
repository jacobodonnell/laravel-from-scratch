<?php

use App\Models\Idea;
use App\Models\User;

test('a logged in user sees their ideas on the home page', function () {
    $user = User::factory()->create();

    Idea::create([
        'user_id' => $user->id,
        'description' => 'My first idea',
    ]);

    $this->actingAs($user);

    visit('/')
        ->assertSee('Your Ideas')
        ->assertSee('My first idea');
});
