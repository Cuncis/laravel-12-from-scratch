<x-layout title="Home">
    @if (count($tasks))
        <p>Yes, I have some tasks. How many? {{ count($tasks) }} tasks. In fact!</p>
    @else
        <p>No, I don't have any tasks.</p>
    @endif

    <h3>Tasks:</h3>

    @forelse ($tasks as $task)
        <li>{{ $task }}</li>
    @empty
        <p>No, I don't have any tasks.</p>
    @endforelse
    <h1>{{ $greeting }} {{ $name }}!</h1>
</x-layout>