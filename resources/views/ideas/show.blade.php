<x-layout>
    <div class="card bg-neutral p-6">
        <div>
            <p>{{ $idea->description }}</p>
        </div>

        <div class="mt-4">
            <a href="/ideas/{{ $idea->id }}/edit"
               class="btn btn-soft">
                Edit
            </a>
        </div>
    </div>
</x-layout>
