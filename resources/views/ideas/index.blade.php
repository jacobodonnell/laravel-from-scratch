<x-layout>
    @if ($ideas->count())
        <div class="mt-6 text-white">
            <h2 class="font-bold">Your Ideas</h2>
            <ul class="mt-2">
                @foreach($ideas as $idea)
                    <a href="/ideas/{{ $idea->id }}">
                        <li class="text-sm">{{ $idea->description }}</li>
                    </a>
                @endforeach
            </ul>
        </div>
    @else
        <p>No ideas yet. <a class="underline" href="/ideas/create">Create New Idea</a></p>
    @endif
</x-layout>
