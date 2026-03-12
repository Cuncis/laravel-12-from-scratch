<x-layout>
    <form action="/ideas" method="post">
        @csrf
        <div class="col-span-full">
            <label for="ideas" class="block text-sm/6 font-medium text-white">New Idea</label>
            <div class="mt-2">
                <textarea id="ideas" name="ideas" rows="3"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save for later?</p>
            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
            </div>
        </div>
    </form>

    <div class="mt-6 flex items-center gap-x-6">
        <a href="/clear-ideas" class="text-sm/6 font-semibold text-white">Clean Ideas</a>
    </div>
    @if (count($ideas))
        <h1 class="text-2xl font-bold text-white mt-6">Your Ideas:</h1>
    @endif
    <ul>
        @forelse($ideas as $idea)
            <li>{{ $idea }}</li>
        @empty
            <p class="text-gray-400">You don't have any ideas yet.</p>
        @endforelse
    </ul>
</x-layout>