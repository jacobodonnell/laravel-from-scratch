<x-layout>
    <form method="POST" action="/register">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Register</legend>

            <label for="name" class="label">Name</label>
            <input type="text" class="input" placeholder="Firstname Lastname" name="name" value="{{ old('name') }}"/>

            <label for="email" class="label">Email</label>
            <input type="email" class="input" placeholder="you@email.com" name="email" value="{{ old('email') }}"/>

            <label for="email_confirmation" class="label">Confirm Email</label>
            <input type="email" class="input" placeholder="Confirm Email" name="email_confirmation"
                   value="{{ old('email_confirmation') }}"/>

            <label for="password" class="label">Password</label>
            <input type="password" class="input" placeholder="Password" name="password"/>

            <label for="password_confirmation" class="label">Confirm Password</label>
            <input type="password" class="input" placeholder="Confirm Password" name="password_confirmation"/>

            @if ($errors->any())
                <div class="text-error text-sm mt-2">
                    {{ $errors->first() }}
                </div>
            @endif

            <button type="submit" class="btn btn-neutral mt-4">Register</button>
        </fieldset>
    </form>
</x-layout>
