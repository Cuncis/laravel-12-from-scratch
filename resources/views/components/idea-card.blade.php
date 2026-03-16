@props(['idea'])

<div {{ $attributes->merge(['class' => 'card bg-neutral text-neutral-content w-full']) }}>
    <div class="card-body items-center text-center">
        <h2 class="card-title break-all w-full text-center">{{ $idea->description }}</h2>
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