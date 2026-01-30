<?php

use App\Models\Idea;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = Idea::query()
                 ->when(request('state'), function (Builder $query, $state) {
                     $query->where('state', $state);
                 })
                 ->get();

    return view('ideas', [
        'ideas' => $ideas
    ]);
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'state'       => 'pending'
    ]);

    return redirect('/');
});

Route::get('/delete-ideas', function () {
    session()->forget('ideas');

    return redirect('/');
});
