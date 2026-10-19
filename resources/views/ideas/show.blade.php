@props(['idea'])

<x-layout title="Ideas">
    <div class="text-white">
        <div class="mt-8">
            <h2 class="text-xl">
                Idea details
            </h2>
            <div>{{ $idea->description }}</div>
        </div>
    </div>
</x-layout>
