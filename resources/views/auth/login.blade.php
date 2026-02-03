<x-layout>
    <form method="POST" action="/login">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Log In</legend>

            <label for="email" class="label">Email</label>
            <input type="email" class="input" placeholder="you@email.com" name="email" value="{{ old('email') }}"/>


            <label for="password" class="label">Password</label>
            <input type="password" class="input" placeholder="Password" name="password"/>

            @if ($errors->any())
                <div class="text-error text-sm mt-2">
                    {{ $errors->first() }}
                </div>
            @endif

            <button type="submit" class="btn btn-neutral mt-4">Log In</button>
        </fieldset>
    </form>
</x-layout>
