@props(['idea'])

<x-layout title="Ideas">
    <div>
        <div class="mt-8">
            <h2 class="text-2xl">
                Laravel Idea details
            </h2>
            <div class="mt-4">{{ $idea->description }}</div>

            <div class="mt-6">
                <a href="/ideas/{{ $idea -> id }}/edit" class="rounded-md bg-indigo-500 text-white px-3 py-2 text-sm font-semibold cursor-pointer" >Go edit</a>
            </div>
        </div>
    </div>
</x-layout>
