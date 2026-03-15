<x-layout>
    <form id="form-edit" action="/ideas/{{ $idea->id }}" method="post">
        @csrf
        @method("patch")
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">Update Idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ $idea->description }}</textarea>
            </div>
            <x-error name="description" />
            <div class="mt-6 flex items-center gap-x-2">
                <button form="form-edit" type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Update</button>

                <button form="form-delete" type="submit"
                    class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Delete</button>
            </div>
        </div>
    </form>

    <form id="form-delete" action="/ideas/{{ $idea->id }}" method="post">
        @csrf
        @method('delete')
    </form>
</x-layout>