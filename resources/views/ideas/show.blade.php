<x-layout>
    <div class="mb-3">
        <h1 class="text-2xl font-bold text-white mt-6">Your Idea:</h1>
        <p>{{ $idea->description }}</p>
    </div>


    <a href="/ideas/{{ $idea->id }}/edit"
        class="mt-6 rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</a>

</x-layout>