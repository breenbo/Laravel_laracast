@props(['ideas'])

<x-layout title="Ideas">
    <div>
        <!-- $ideas is now a collection of objects -->
        @if ($ideas->count())
            <div class="mt-8">
                <h2 class="text-2xl">
                   Already Awesome ideas
                </h2>
                <div class="mt-4 grid grid-cols-2 gap-4">
                    @foreach ($ideas as $idea)
                        <a href="/ideas/{{$idea -> id}}" class="card bg-base-100 shadow-sm border border-neutral-200 hover:border-neutral-400">
                            <div class="card-body">
                                <h2 class="card-title">{{ $idea -> description }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
</x-layout>
