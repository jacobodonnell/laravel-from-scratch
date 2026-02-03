<x-layout>
    <form method="POST" action="/ideas">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">New Idea</legend>
            <div class="col-span-full">
                <label for="description" class="block text-sm/6 font-light text-base-content/30">Description</label>
                <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                          class="textarea w-full bg-base-100 border-base-300 @error('description') textarea-error @enderror">{{ old('description') }}</textarea>

                    <x-forms.error name="description"/>
                </div>
            </div>
            <button class="btn btn-neutral mt-4">Create</button>
        </fieldset>
    </form>
</x-layout>
