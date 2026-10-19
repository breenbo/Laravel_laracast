@props(['idea'])

<x-layout title="Edit Idea">
    <div class="text-white">
        <div class="text-4xl mb-6">
            Laravel Ideas - Edit
        </div>

        <form method="POST" action="/ideas/{{ $idea -> id }}/edit">
            @csrf
            @method('PATCH')

            <legend>Edit this awesome idea</legend>
            <textarea class="mt-3 h-24 w-full bg-white/5" placeholder="Awesome new idea" id="description" name="description"> {{ $idea -> description }}</textarea>

            <div class="mt-6 flex items-center gap-x-4">
                <button type="submit" class="rounded-md bg-indigo-500 text-white px-3 py-2 text-sm font-semibold cursor-pointer" >Update</button>
                <button
                    type="submit"
                    form="delete-idea-form"
                    class="rounded-md bg-red-500 text-white px-3 py-2 text-sm font-semibold cursor-pointer" >Delete</button>
            </div>
        </form>

        <form method="POST" action="/ideas/{{$idea -> id}}" id="delete-idea-form">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
