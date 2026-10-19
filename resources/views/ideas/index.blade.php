@props(['ideas'])

<x-layout title="Ideas">
    <div class="text-white">
        <div class="text-4xl mb-6">
            Laravel Ideas
        </div>

        <form method="POST" action="/ideas">
            @csrf
            <legend>Come on, have an idea</legend>
            <textarea class="mt-3 h-24 w-full bg-white/5" placeholder="Awesome new idea" id="idea" name="idea"></textarea>

            <div class="mt-6">
                <button type="submit" class="rounded-md bg-indigo-500 text-white px-3 py-2 text-sm font-semibold cursor-pointer" >Save</button>
            </div>
        </form>

        <!-- $ideas is now a collection of objects -->
        @if ($ideas->count())
            <div class="mt-8">
                <h2 class="text-xl">
                   Already awesome ideas
                </h2>
                <ul class="mt-4 ml-4">
                    @foreach ($ideas as $idea)
                        <li>- {{ $idea->description }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</x-layout>
