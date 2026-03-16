<x-layout>
    @if ($ideas->count() > 0)
        <h1 class="text-2xl font-bold text-white mt-6">Your Ideas:</h1>
    @endif
    <ul>
        @forelse($ideas as $idea)
            {{-- <li>{{ $idea->id }}. <a href="/ideas/{{ $idea->id }}">{{ $idea->description }}</a></li> --}}
            <div class="card bg-neutral text-neutral-content w-96">
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{ $idea->description }}</h2>
                    <div class="card-actions justify-end">
                        <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-primary">Edit</a>
                        <button form="form-delete-{{ $idea->id }}" type="submit" class="btn btn-dangerous">Remove</button>

                        <form id="form-delete-{{ $idea->id }}" action="/ideas/{{ $idea->id }}" method="post">
                            @csrf
                            @method('delete')
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-400">You don't have any ideas yet.</p>
        @endforelse
    </ul>
</x-layout>