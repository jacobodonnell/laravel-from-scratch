<a {{ $attributes->merge(['class' => 'card bg-neutral text-neutral-content']) }}>
    <div class="card-body">
        <h2 class="card-title">{{ $slot }}</h2>
    </div>
</a>
