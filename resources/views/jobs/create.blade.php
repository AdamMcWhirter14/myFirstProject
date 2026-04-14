<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <x-form-field>
            <x-form-label for="title">Title</x-form-label>
            <div class="mt-2">
                <x-form-input name="title" id="title" placeholder="CEO" required />
                <x-form-error name="title" />
            </div>
        </x-form-field>

        <x-form-field>
            <x-form-label for="salary">Salary</x-form-label>
            <div class="mt-2">
                <x-form-input name="salary" id="salary" placeholder="$50,000" />
                <x-form-error name="salary" />
            </div>
        </x-form-field>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>