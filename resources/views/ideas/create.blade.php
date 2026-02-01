<x-layout>
    <form method="POST" action="/ideas">
        @csrf

        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium">Create New Idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                          class="textarea w-full bg-base-200 border-base-300 @error('description') textarea-error @enderror">{{ old('description') }}</textarea>

                <x-forms.error name="description"/>
            </div>
            <p class="mt-3 text-sm/6 text-content">Have an idea you want to save for later?</p>
        </div>
        <div class="mt-6 flex items-center gap-x-2">
            <button type="submit"
                    class="btn">
                Save
            </button>

        </div>
    </form>
</x-layout>
