@props(['ideas'])

<x-layout title="Ideas">
    <div class="text-white">
        <div class="text-4xl mb-6">
            Laravel Ideas
        </div>
        <a href="/ideas/create">Create awesome ideas</a>
        <!-- $ideas is now a collection of objects -->
        @if ($ideas->count())
            <div class="mt-8">
                <h2 class="text-xl">
                   Already awesome ideas
                </h2>
                <ul class="mt-4 ml-4">
                    @foreach ($ideas as $idea)
                        <li><a href="/ideas/{{ $idea->id }}" > - {{ $idea->description }}</a></li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</x-layout>
