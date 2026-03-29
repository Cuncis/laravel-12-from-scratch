<x-layout>
    <h1 class="text-2xl font-bold text-white mt-6">Your Ideas:</h1>
    <ul class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($ideas as $idea)
            <x-idea-card :idea="$idea" />
        @empty
            <p class="text-gray-400">You don't have any ideas yet.</p>
        @endforelse
    </ul>
</x-layout>