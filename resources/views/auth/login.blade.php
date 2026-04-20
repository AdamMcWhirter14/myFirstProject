<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <x-form-field>
            <x-form-label for="email">Email</x-form-label>
            <div class="mt-2">
                <x-form-input name="email" id="email" type="email" required />
                <x-form-error name="email" />
            </div>
        </x-form-field>

        <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
                <x-form-input name="password" id="password" type="password" required />
                <x-form-error name="password" />
            </div>
        </x-form-field>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>