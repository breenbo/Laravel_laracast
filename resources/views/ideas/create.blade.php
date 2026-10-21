@props(['ideas'])

<x-layout title="Ideas">
    <div>
        <div class="text-4xl mb-6">
            Laravel Ideas - Create
        </div>

        <form method="POST" action="/ideas">
            @csrf
            <legend>Come on dude, have an idea</legend>
            <textarea class="textarea mt-4 w-full" placeholder="Awesome new idea" id="description" name="description"></textarea>
            <x-form.error name="description"/>

            <div class="mt-6">
                <button type="submit" class="btn btn-primary" >Save</button>
            </div>
        </form>
    </div>
</x-layout>
