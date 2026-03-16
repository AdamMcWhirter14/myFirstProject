<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-6">
            <div>
                <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Job Title</label>
                <div class="mt-2">
                    <input type="text" name="title" id="title" value="{{ $job->title }}"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('title')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                <div class="mt-2">
                    <input type="text" name="salary" id="salary" value="{{ $job->salary }}"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @error('salary')
                    <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
            </div>

            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500">
                    Update
                </button>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>