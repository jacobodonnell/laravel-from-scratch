<x-layout>
    <form method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('PATCH')
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Edit Idea</legend>
            <div class="col-span-full">
                <label for="description" class="block text-sm/6 font-light text-base-content/30">Description</label>
                <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                          class="textarea w-full bg-base-100 border-base-300 @error('description') textarea-error @enderror">{{ $idea->description }}</textarea>

                    <x-forms.error name="description"/>
                </div>
            </div>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-2 mt-4">
                <button class="btn btn-neutral w-full sm:flex-1">Update</button>
                <button type="submit"
                        form="delete-idea-form"
                        class="btn btn-error btn-ghost w-full sm:flex-1">
                    Delete
                </button>
            </div>
        </fieldset>

    </form>

    <form id="delete-idea-form" method="POST" action="/ideas/{{ $idea->id }}">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
