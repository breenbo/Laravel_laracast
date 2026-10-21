@props(['idea'])

<x-layout title="Edit Idea">
    <div>
        <div class="text-4xl mb-6">
            Laravel Ideas - Edit
        </div>

        <form method="POST" action="/ideas/{{ $idea -> id }}/edit">
            @csrf
            @method('PATCH')

            <legend>Edit this awesome idea</legend>
            <textarea class="textarea mt-4 w-full" placeholder="Awesome new idea" id="description" name="description"> {{ $idea -> description }}</textarea>

            <div class="mt-6 flex items-center gap-x-4">
                <button type="submit" class="btn btn-primary" >Update</button>
                <button
                    type="submit"
                    form="delete-idea-form"
                    class="btn btn-error" >Delete</button>
            </div>
        </form>

        <form method="POST" action="/ideas/{{$idea -> id}}" id="delete-idea-form">
            @csrf
            @method('DELETE')
        </form>
    </div>
</x-layout>
