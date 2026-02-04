<?php

use App\Models\Idea;
use App\Models\User;

it('shows all ideas for current user', function () {
    $user = User::factory()->create();
    $user->ideas()->create(['description' => 'First idea description for testing']);
    $user->ideas()->create(['description' => 'Second idea description for testing']);

    $otherUser = User::factory()->create();
    $otherUser->ideas()->create(['description' => 'Other user idea that should not appear']);

    $this->actingAs($user);

    visit('/ideas')
        ->assertSee('First idea description for testing')
        ->assertSee('Second idea description for testing')
        ->assertDontSee('Other user idea that should not appear');
});

it('shows a single idea', function () {
    $user = User::factory()->create();
    $idea = $user->ideas()->create(['description' => 'A single idea to view']);

    $this->actingAs($user);

    visit("/ideas/{$idea->id}")
        ->assertSee('A single idea to view')
        ->assertSee('Edit');
});

it('denies access to another user\'s idea', function () {
    $owner = User::factory()->create();
    $idea  = $owner->ideas()->create(['description' => 'Private idea belonging to owner']);

    $this->actingAs(User::factory()->create());

    visit("/ideas/$idea->id")
        ->assertSee('403');
});

it('shows an edit form to update an idea', function () {
    $user = User::factory()->create();
    $idea = $user->ideas()->create(['description' => 'Original idea description here']);

    $this->actingAs($user);

    visit("/ideas/$idea->id/edit")
        ->assertSee('Edit Idea')
        ->assertValue('#description', 'Original idea description here');
});

it('updates an idea via the edit form', function () {
    $user = User::factory()->create();
    $idea = $user->ideas()->create(['description' => 'Original idea description here']);

    $this->actingAs($user);

    visit("/ideas/$idea->id/edit")
        ->clear('#description')
        ->type('#description', 'Updated idea description here')
        ->click('Update')
        ->assertPathIs("/ideas/$idea->id")
        ->assertSee('Updated idea description here');

    expect($idea->fresh()->description)->toBe('Updated idea description here');
});

it('shows a validation error when updating with too short input', function () {
    $user = User::factory()->create();
    $idea = $user->ideas()->create(['description' => 'Original idea description here']);

    $this->actingAs($user);

    visit("/ideas/$idea->id/edit")
        ->clear('#description')
        ->type('#description', 'short')
        ->click('Update')
        ->assertPathIs("/ideas/$idea->id/edit")
        ->assertSee('The description field must be at least 10 characters.');
});

it('deletes an idea from the edit form', function () {
    $user = User::factory()->create();
    $idea = $user->ideas()->create(['description' => 'Idea to be deleted soon']);

    $this->actingAs($user);

    visit("/ideas/$idea->id/edit")
        ->click('Delete')
        ->assertPathIs('/ideas');

    expect(Idea::find($idea->id))->toBeNull();
});
