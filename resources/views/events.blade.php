<x-layout>


    <h1 class="mb-5 text-3xl">Special Events</h1>

    @foreach ($events as $event)
        <x-eventCard :event="$event" />
    @endforeach


</x-layout>