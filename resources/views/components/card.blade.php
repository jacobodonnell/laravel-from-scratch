@props([
    'idea'
])
<a class="card bg-neutral text-neutral-content" href="/ideas/{{ $idea->id }}">
    <div class="card-body">
        <h2 class="card-title">{{ $idea->description }}</h2>
    </div>
</a>
